<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" /> <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Відгуки</title>
  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3">
                        
                <h1>Всі відгуки</h1>

                    <?php
                    $connect=new PDO('mysql:host=localhost;dbname=formsbd', 'root', '');
                    $all=('SELECT * FROM `form` ORDER by date');
                    $statementAll=$connect->prepare($all);
                    $statementAll->execute();
                    $resultAll=$statementAll->fetchAll();
                    ?>

    <table class="table">
         <?php foreach ($resultAll as $user): ?>

        <tr>
            <td><?= $user['date'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td><?= $user['comment'] ?> </td>
        </tr>
    
        <?php endforeach; ?>
    </table>

            </div>
        </div>
    </div>

</body>

</html>