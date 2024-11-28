<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Links</title>
    

    <style>

        /* Estilo geral da página */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
    color: #333;
}

/* Título principal */
h1 {
    text-align: center;
    color: #4CAF50;
    margin-bottom: 20px;
}

/* Botão "Adicionar Novo Link" */
a[href="/biolink/create"] {
    display: block; /* Faz o link agir como um bloco */
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    width: 200px; /* Ajuste o tamanho do botão */
    margin: 20px auto; /* Centraliza o botão */
    transition: background-color 0.3s ease;
}

a[href="/biolink/create"]:hover {
    background-color: #45a049;
}



/* Lista de links */
ul {
    list-style: none;
    padding: 0;
    max-width: 600px;
    margin: 20px auto;
}

li {
    margin: 10px 0;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Estilo dos links */
li a {
    text-decoration: none;
    color: #007BFF;
    font-size: 18px;
    font-weight: bold;
    transition: color 0.3s ease;
}

li a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Meus Links</h1>
    <a href="/biolink/create">Adicionar Novo Link</a>

    <ul>
        <?php foreach ($links as $link): ?>
            <li>
                <a href="<?= htmlspecialchars($link['url']); ?>" target="_blank">
                    <?= htmlspecialchars($link['title']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
