<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<!-- Navbar Start -->
<?php

include "navbar.php";

?>

<!-- Navbar End -->

<body>

<!-- Slider Start -->

<div class="container-fluid">
    <section>
        <div class="carousel slide mt-5" data-bs-ride="carousel" id="slider1">
            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-target="#slider1" data-bs-slide-to="0"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#slider1" data-bs-slide-to="3"></button>

            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/kahve3.jpg" class="d-block w-100" alt="Slider Resim" height="400px" width="800px">
            </div>
            <div class="carousel-item">
                <img src="images/kahve2.jpg" class="d-block w-100" alt="Slider Resim" height="400px" width="800px">
            </div>
                <div class="carousel-item">
                <img src="images/kahve3.jpg" class="d-block w-100" alt="Slider Resim" height="400px" width="800px">
            </div>
            <div class="carousel-item">
                <img src="images/kahve2.jpg" class="d-block w-100" alt="Slider Resim" height="400px" width="800px">
            </div>
        </div>


        <button type="button" class="carousel-control-prev" data-bs-target="#slider1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button type="button" class="carousel-control-next" data-bs-target="#slider1" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </section>

</div>

<!-- Slider End -->

<!-- Cards Start -->


<div class="container" id="cards" style="margin-bottom: 100px">

    <section class="mt-2 p-4">
        <div class="d-flex justify-content-center p-4">
            <h2>Kahve Seçenekleri</h2>
        </div>

        <div class="row d-flex justify-content-center">


            <div class="card col-lg-3 m-3 p-0">
                <img class="img-fluid" src="https://via.placeholder.com/300x200"  alt="blog-resim">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-center"><h2 style="color: sienna">Latte</h2></div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <a href="#" class="btn btn-success d-flex justify-content-center">Sipariş Ver</a>
                </div>
            </div>

            <div class="card col-lg-3 m-3 p-0">
                <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="blog-resim">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-center"><h2 style="color: sienna">Americano</h2></div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <a href="#" class="btn btn-success d-flex justify-content-center">Sipariş Ver</a>
                </div>
            </div>
            <div class="card col-lg-3 m-3 p-0">
                <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="blog-resim">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-center"><h2 style="color: sienna">Mocha</h2></div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                    <a href="#" class="btn btn-success d-flex justify-content-center">Sipariş Ver</a>
                </div>
            </div>

            <?php
            include_once("connect.php");

            $cards=$pdo->prepare("SELECT * FROM cards");
            $cards->execute();

            while($oku=$cards->fetch(PDO::FETCH_ASSOC)){
                ?>

                <div class="card col-lg-3 m-3 p-0">
                    <img src="<?php echo $oku['card_image'] ?> " class="img-fluid" alt="blog-resim">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-center"><h2 style="color: sienna"> <?php echo $oku['card_title'] ?> </h2></div>
                        <p class="card-text"> <?php echo $oku['card_text'] ?> </p>
                        <a href="#" class="btn btn-success d-flex justify-content-center">Sipariş Ver</a>
                    </div>
                </div>
            <?php }
            ?>

        </div>



    </section>


</div>

<!-- Cards End -->


<!-- Footer Start -->

<!--
<section>
    <nav class="navbar py-1 fixed-bottom navbar-dark bg-dark">
        <div class="container d-flex justify-content-center align-items-center">
            <p class="text-white ">Kadir Tetik - Portfolios / 2023</p>
        </div>
    </nav>
</section>

-->

<!-- Footer End -->

</body>
</html>