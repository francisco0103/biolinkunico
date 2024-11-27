<?php

namespace App\Controllers;

use Core\Controller;
use Core\Database;

class linkController extends Controller {


    public function biolink() {
       
       $userId = $_SESSION['user_id'];
       $this->view('/biolink/biolink2');

   }

   public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $title = $_POST['title'];
           $url = $_POST['url'];
           //$userId = $_SESSION['user_id'];
           $userId = 1;
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

