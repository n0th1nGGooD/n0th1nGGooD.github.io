<?php
$to = "shelepov345@mail.ru"
$from = trim($_POST['email'])
$subject = "Glab"
$messeage = $_POST['name' + " хочет купить гитару"]

if(mail($to, $subject, $messeage))
{
    echo 'Письмо отправлено'
}
{
    else 'Письмо не отправлено'
}
?>