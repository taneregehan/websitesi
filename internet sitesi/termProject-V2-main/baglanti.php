<?php

$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "yorum";

$connect = new mysqli ($servername, $username, $password, $dbname);

if($connect->connect_error){

    die("BAĞLANAMADI :");

}else{
    echo"bağlandı";
}
if( isset($_POST["usrname"]) || isset($_POST["usrsurname"]) || isset($_POST["comment"]) ){
$name = $_POST["usrname"];
$username = $_POST["usrsurname"];
$comment = $_POST ["comment"]; 

}

$ekle = "insert into users(name,surname,comment) values('$name','$username','$comment')";
if($connect->query($ekle)) {
    header('Location: index.php');

    
}
else {
echo "Kayıt yapılamadı lütfen eksiksiz bilgi giriniz ...";
    

}

?>