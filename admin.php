
<?php

include_once("navbar.php");

include_once ("islemler.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<div class="container d-flex">
    <form name="card" method="post" action="islemler.php" novalidate>
    <div class="row card mt-5 bg-dark rounded-5" style="height: 250px">
            <h2 style="text-align:center; color: whitesmoke; margin-top: 10px">Kahve Oluştur..</h2>
            <input type="text" name="card_title" placeholder="Başlığı Giriniz.." class="rounded-pill">
            <input type="text" name="card_image" placeholder="Fotoğraf yolunu giriniz.." class="rounded-pill mt-2">
            <input type="text" name="card_text" placeholder="Texti giriniz.." class="rounded-pill mt-2">
        <input type="submit" name="card_submit" placeholder="gönder" class="btn  rounded-pill mt-3 p-1 bg-warning-subtle">
    </div>
        </form>

</div>

</body>
</html>