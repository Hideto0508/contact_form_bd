<?php
$host = 'localhost';
$dbname ='phpkiso';
$charset = 'utf8mb4';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$dbh = new PDO($dsn, $user, $password);

$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$surveys = $stmt->fetchALL();

//var_dump($surveys);
$dbh = null;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     for(){


     }

    <div class="container"></div>
    <?php foreach($surveys as $survey): ?>

    <h2><?= $survey['nickname'] ?></h2>
    <p><?= $survey['email'] ?></p>
    <p><?= $survey['content'] ?></p>

    <?php endforeach; ?>

</body>
</html>