<?php 
if(isset($_POST['phone'])) {
    $text = "Имя: ".$_POST['name']."\r\n Телефон: ".$_POST['phone']."\r\n Что заказали: ".$_POST['notes']."\r\n IP адрес: ".$_SERVER["REMOTE_ADDR"];
    mail(file_get_contents("admin/params/email.txt"), "Заказ Mini Camera", $text);
    header("Location: mail.php");
}
else echo "Не то";
?>