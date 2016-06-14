<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Блог</title>
        <link rel="stylesheet" href="../style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">Блог</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?action=add">Создать статью</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <table id="admin_table" class="table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=articles_intro($article['title'], 80)?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>

