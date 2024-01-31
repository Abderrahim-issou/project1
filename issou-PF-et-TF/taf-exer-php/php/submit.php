<?php
$em="mohamed122@gmail.com";
$pass="155102";

if(isset($_POST["send"])){



$eamil=$_POST["email"];
$password=$_POST["password"];
if($eamil==$em && $password==$pass)
{
    echo "hello".$eamil;
}
else{
    header("location:page1.html");
    

}
}

?>