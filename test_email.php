<?php
include "admin/koneksi.php";
$update = mysql_query("INSERT INTO feedback(nama,email,pesan) VALUES('$_POST[nama]','$_POST[email]','$_POST[pesan]')");
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\POP3;
use PHPMailer\PHPMailer\OAuth;
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/POP3.php';
require_once 'PHPMailer/src/OAuth.php';
$mail = new PHPMailer;
// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'mail.pkl.code.redwhite.co.id';
$mail->SMTPAuth = true;
$mail->Username = 'nadia@pkl.code.redwhite.co.id';
$mail->Password = 'nadia22mlyn21gincu';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('nadia@pkl.code.redwhite.co.id', "'$_POST[nama]'");
$mail->addReplyTo('nadia@pkl.code.redwhite.co.id',"'$_POST[nama]'");
// Menambahkan penerima
$mail->addAddress('nadiamulyani1423@gmail.com');
$mail->addAddress('nadia@pkl.code.redwhite.co.id');
// Subjek email
$mail->Subject = 'Kritik & Saran';
// Mengatur format email ke HTML
$mail->isHTML(true);
// Konten/isi email
$mailContent = "'$_POST[pesan]'";
$mail->Body = $mailContent;
// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}