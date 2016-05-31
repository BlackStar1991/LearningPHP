<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Блог</title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default" role="navigation">
                <h1><a href="index.php">Блог</a></h1>
                <h4><a href="admin">Панель администратора</a></h4>
            </nav> 
            <!-- END Header (navbar) -->
            <?php foreach($articles as $article): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Опубликованно: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
            <?php endforeach ?>
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>