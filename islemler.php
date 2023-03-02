<?php

include_once("connect.php");


if(isset($_POST['user_uye'])){


    $oku=$pdo->prepare("SELECT * FROM user");
    $oku->execute();

    while($kontrol=$oku->fetch(PDO::FETCH_ASSOC)){

        if($kontrol['user_name']==$_POST['user_name']){

            Header("Location: index.php?uye=false");
            exit();

        }

    }

    $kaydet=$pdo->prepare("INSERT into user set user_name=:user_name, user_pass=:user_pass");
    $kaydet->execute(
        [
            'user_name'=>$_POST['user_name'],
            'user_pass'=>$_POST['user_pass']
        ]
    );

    Header("Location: index.php?uye=ok");
    exit();

}


if(isset($_POST['user_giris'])){

    $users=$pdo->prepare("SELECT * FROM user");
    $users->execute();

    while($oku=$users->fetch(PDO::FETCH_ASSOC)){
if($oku['user_name']==$_POST['username'] && $oku['user_pass']==$_POST['password']){

    Header("Location: admin.php?giris=ok");
    exit();
}

    }

    Header("Location: index.php?giris=false");
    exit();

}


if(isset($_POST['card_submit'])){

    $kaydet=$pdo->prepare("INSERT into cards set card_title=:card_title, card_image=:card_image, card_text=:card_text");

    $insert=$kaydet->execute(
        [
            'card_title'=>$_POST['card_title'],
            'card_image'=>$_POST['card_image'],
            'card_text'=>$_POST['card_text'],

        ]
    );

    if($insert=="1"){
        Header("Location: admin.php?card=ok");
        exit();
    }

}



?>