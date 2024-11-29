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
            font-size: 2em;
        }

        /* Botão "Adicionar Novo Link" */
        a[href="/biolink/create"] {
            display: block; /* Faz o link agir como um bloco */
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
            margin: 0 auto 30px;
            max-width: 200px;
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

        /* Estilo dos links dentro da lista */
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

        /* Responsividade */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            h1 {
                font-size: 1.6em;
            }

            a[href="/biolink/create"] {
                max-width: 100%;
                padding: 10px;
                font-size: 1em;
            }

            ul {
                max-width: 100%;
                padding-left: 20px;
            }
        }

    </style>
</head>
<body>
    <h1>Meus Links</h1>
    <a href="/biolink/create">Adicionar Novo Link</a>

    <ul>
        <?php 
        foreach ($links as $link): 
        ?>
            <li>
                <a href="<?= htmlspecialchars($link['url']); ?>" target="_blank">
                    <?= htmlspecialchars($link['title']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
