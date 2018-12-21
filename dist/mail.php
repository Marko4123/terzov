<?php

session_start();
$url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = '';
    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);
if (isset($data->success) AND $data->success == true) {
  require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "";
        $mail->Password = "";
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->setFrom(''.$_POST['email'].'', ''.$_POST['name'].'');
        $mail->AddAddress('terzov_eood@abv.bg');
        $mail->AddReplyTo('' . $_POST['email'] . '', '' . $_POST['name'] . '');
        $mail->Subject = 'Съобщение от сайта ';
        $mail->IsHTML(true);
        $message = file_get_contents('templates/message2.html');
        $message = str_replace('%name%', $_POST['name'], $message);
        $message = str_replace('%mail%', $_POST['email'], $message);
        $message = str_replace('%msg%', $_POST['comment'], $message);
        $mail->MsgHTML($message);
        $mail->AltBody = (strip_tags($message));
        if (!$mail->Send()) {
          echo "
            <div class='validation-error'><p><i class='fas fa-times'></i> Проблем при изпращането.</p></div>";
        }
        else {
          echo "
          <div class='mail-sent-ok'>
          <p><i class='fas fa-check'></i> Успешно изпратено съобщение.</p>
          </div>";
        }
} else {
  echo "
    <div class='validation-error'><p><i class='fas fa-times'></i> Невалиден код за сигурност.</p></div>";
}




 ?>
