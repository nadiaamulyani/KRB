            <?php
            include "admin/koneksi.php";
            $url   = $_SERVER['QUERY_STRING'];
            $pecah = explode('-',$url);
            $hal  = $pecah[0];
            $judul  = $pecah[1];
            $id_content	   = $pecah[2];
            
            ?>
<?php
//print_r($hal);
switch($hal){
	case 'sejarah':
		include 'more_sejarah.php';
		//print_r($pecah);
		break;
	case 'tempat':
		include 'more_tempat.php';
		//print_r($pecah);
		break;
    case 'pohon':
		include 'more_pohon.php';
		//print_r($pecah);
		break;
	case 'kontak':
		include 'kontak.php';
		//print_r($pecah);
		break;
	case 'proses_kontak':
		include 'proses_kontak.php';
		//print_r($pecah);
		break;
		
	default:
		echo '';
		break;
}
?>

<?php
if($hal=="sejarah")
    echo "";
elseif($hal=="tempat")
    echo "";
elseif($hal=="pohon")
    echo "";
elseif($hal=="kontak")
    include "header.php";

 else{
?>

        <?php
        	include "header.php";
        ?>
    

<!-- #sejarah -->
             <div class="content-block" id="sejarah">
				<div class="container">
				    <div style="text-align: center;">
					<header class="block-heading cleafix">
						<h1>Tentang Kebun Raya Bogor</h1>
						<p>Ringkasan singkat dari Kebun Raya Bogor</p>
					</header>
					</div>
					<section class="block-body">
					    <div class="row">
<?php
include "admin/koneksi.php";
$no=0;
$data = "SELECT * from content where id_category = 1";
$bacadata = mysql_query($data);

while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$judul          = $select_result['judul'];
$isi         = substr ($select_result['isi'],0,130);
$gambar        = "admin/images/".$select_result['gambar'];

?>
							<div class="col-xs-12">
								<h2><?php echo $judul;?></h2>
								<img src="timthumb/<?php echo $gambar;?>/300/200">
								<p><?php echo $isi;?>....</p>
								<a href="<?php echo'sejarah-'.$judul.'-'.$select_result['id_content'];?>">Read More</a>
							</div>
<?php }?>
						</div>
					</section>
				</div>
			</div>
<!-- #sejarah -->
		
			
<!-- #tempat -->
						<div class="content-block" id="portfolio">
				<div class="container">
				    <div style="text-align: center;">
					<header class="block-heading cleafix">
						<h1>Tempat Favorit</h1>
						<p>Kebun Raya Bogor mempunyai beberapa tempat favorit diantaranya sebagai beriku</p>
					</header>
					</div>
					<section class="block-body">
						<div class="row">
<?php
include "admin/koneksi.php";
$no=0;
$data = "SELECT * from content where id_category = 2";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$judul          = $select_result['judul'];
$isi         = substr ($select_result['isi'],0,130);
$gambar        = "admin/images/".$select_result['gambar'];

?>
							<div class="col-sm-4">
								<a href="<?php echo'tempat-'.$judul.'-'.$select_result['id_content'];?>" class="recent-work" style="background-image:url(<?php echo $gambar;?>)">
									<span class="btn btn-o-white"><?php echo $judul;?></span>
								</a>
							</div>
<?php }?>
						</div>
					</section>
				</div>
			</div>
<!-- #tempat -->
			
			
<!-- #pohon -->
			<div class="content-block" id="pohon">
				<div class="container">
				    <div style="text-align: center;">
					<header class="block-heading cleafix">
						<h1>Koleksi Tanaman</h1>
						<p>Berikut adalah beberama koleksi tanaman yang ada di Kebun Raya Bogor</p>
					</header>
					</div>
					<section class="block-body">
						<div class="row">
<?php
include "admin/koneksi.php";
$no=0;
$data = "SELECT * from content where id_category = 3";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$judul          = $select_result['judul'];
$isi         = substr ($select_result['isi'],0,130);
$gambar        = "admin/images/".$select_result['gambar'];

?>
							<div class="col-sm-4 blog-post">
								<h2><?php echo $judul;?></h2>
								<img  src="timthumb/<?php echo $gambar;?>/300/200">
								<p><?php echo $isi;?>....</p>
								<a href="<?php echo'pohon-'.$judul.'-'.$select_result['id_content'];?>">Read More</a>
							</div>
<?php }?>
						</div>
					</section>
				</div>
			</div>
<!-- #pohon -->


<?php   
    include "proses.php";
?>		
<!-- #contact -->
    <div class="content-block" id="contact">
				<div class="container text-center">
					<header class="block-heading cleafix">
						<h1>Contact Us</h1>
						<p>Feel free to drop us a line.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
			<?php if (isset($success)) {
             if ($success==true) { ?>
            <div class="alert alert-success"><?php echo "Terima Kasih Telah Memberikan Feedback"; ?></div>
            <? } else { ?>
            <div class="alert alert-danger"><?php echo "Gagal!, Mohon lengkapi Form dan Captcha yang tersedia"; ?></div>
            <?php } } ?>
 
 
								<form method="POST" action="?">
									<div class="form-group">
								    	<input type="nama" name="nama" class="form-control form-control-white" id="subject" placeholder="Nama" required>
								  	</div>
								    <div class="form-group">
								    	<input type="email" name="email" class="form-control form-control-white" id="exampleInputEmail2" placeholder="Masukan Email" required>
								    </div>
								    <div class="form-group">
								    	<textarea name="pesan" class="form-control form-control-white" placeholder="Kritik dan Saran" required></textarea>
								    </div>
								    <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
								   <input type="submit" name="submit" class="btn btn-o-white" value="Say Hello">
								</form>
							</div>
						</div>
					</section>
				</div>
			</div>
 <!-- Memuat API Google reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
<!-- #contact -->

<?php

	include "footer.php";
	 }
?>