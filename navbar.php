
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-success">
<div class="container">
    <div class="navbar-brand d-flex align-items-center">
        <a class="navbar-brand text-white" href="index.php" style="font-size: 35px">Anasayfa</a>
        <img class="navbar-brand rounded-circle" src="https://via.placeholder.com/70x70">
    </div>

    <button class="navbar-toggler bg-white border-0"type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" >
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#slider1" class=" hover-overlay btn btn-success nav-link active m-1 text-white">Anasayfa</a>
            </li>

            <li class="nav-item">
                <a href="#hakkimizda" class=" btn btn-success nav-link active m-1 text-white">Hakkımızda</a>
            </li>

            <li class="nav-item">
                <a href="#cards" class=" btn btn-success nav-link active m-1 text-white ">Öneriler</a>
            </li>
<!--
            <li>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle text-white active m-1 col-12" type="button" id="dropdownMenuler" data-bs-toggle="dropdown">Menüler</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuler">
                        <li>
                            <a class="dropdown-item bg-success my-1 text-white" href="#">Kahve Çeşitleri</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-success my-1 text-white" href="#">Tatlı Çeşitleri</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-success my-1 text-white" href="#">Çekirdek Kahveler</a>
                        </li>
                    </ul>
                </div>
            </li>
-->

            <li>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle text-white active m-1 " type="button" id="dropdownGiris" data-bs-toggle="dropdown">Giriş Yap</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownGiris">
                        <form name="giris" action="islemler.php" method="post">

                            <li>
                                <input class="dropdown-item my-1" type="text" name="username">
                            </li>
                            <li>
                                <input class="dropdown-item my-1" type="password" name="password">
                            </li>
                            <li>
                                <input class="dropdown-item my-1 bg-warning text-white d-flex justify-content-center" type="submit" name="user_giris" value="Giriş">
                            </li>

                        </form>

                    </ul>
                </div>


            </li>

            <li>
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle text-white active m-1 " type="button" id="dropdownYeni" data-bs-toggle="dropdown">Kullanıcı Oluştur</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownYeni">
                        <form name="giris1" action="islemler.php" method="post">

                            <li>
                                <input class="dropdown-item my-1" type="text" name="user_name">
                            </li>
                            <li>
                                <input class="dropdown-item my-1" type="password" name="user_pass">
                            </li>
                            <li>
                                <input class="dropdown-item my-1 bg-danger text-white d-flex justify-content-center" type="submit" name="user_uye" value="Gönder">
                            </li>

                        </form>
                    </ul>
                </div>

            </li>

        </ul>



    </div>

</div>

</nav>