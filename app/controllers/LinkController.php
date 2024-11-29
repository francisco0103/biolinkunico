<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class linkController extends Controller {


    public function biolink() {
       session_start();

       $username = $_SESSION['username'];
       $userId = $_SESSION['user_id'];
       $db = Database::connect();
       $stm = $db->prepare("
          SELECT links.*, users.*
          FROM links
          JOIN users ON links.user_id = users.id
          WHERE users.username = :username
        ");

      $stm->bindParam(':username', $username );
   

      // $stm = $db->prepare("SELECT * FROM links WHERE username = :username");

      // $stm->bindParam(":username", $username);
      $stm->execute();

      $links = $stm->fetchAll();
      session_start();

       $this->view('/biolink/biolink2',['links'=>$links]);

   }

   public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          session_start();
           $title = $_POST['title'];
           $url = $_POST['url'];
           $userId = $_SESSION['user_id'];

          //  $userId = 1;
           $db = Database::connect();

           $stm = $db->prepare("INSERT INTO links (user_id, title,url ) VALUES (:user_id, :title, :url)");//adicionar as coisas que tem na tabela
           
       
     
           $stm->bindParam(":user_id", $userId);
           $stm->bindParam(":title", $title);
           $stm->bindParam(":url", $url);
        
           
             if($stm->execute()) {
               $this->redirect('/biolink/biolink2');
             }

           
        }
        $this->view('biolink/create');
    }
}

