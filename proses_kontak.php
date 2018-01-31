<?php
include "admin/koneksi.php";
$update = mysql_query("INSERT INTO feedback(nama,email,pesan) VALUES('$_POST[nama]','$_POST[email]','$_POST[pesan]')");

    ini_set( 'display_errors', 1 );   
    error_reporting(E_ALL);    
    $from = "$_POST[email]";    
    $to = "nadiamulyani1423@gmail.com";    
    $subject = "Kritik dan Saran User";    
    $message = "$_POST[pesan]";   
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);  
     
?>


<?php
    $site_key = '6Lchvj0UAAAAAGVnfc1bgMmOjMG7YYKxpvWV6wI2'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6Lchvj0UAAAAAFVZZe158mpT_OsNkCfFwCvsWXH4'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
 
    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success'])
            {
                $comment = $_POST['komentar'];
                // proses penyimpananan dan lain-lain disini
                $success = true;
            }
            else
            {
                $success = false;
            }
        }
        else
        {
            $success = false;
        }
    }
?>