			<div class="content-block" id="sejarah">
				<div class="container">
					<header class="block-heading cleafix">
						<h1>Sejarah Kebun Raya Bogor</h1>
						<p>Sebuah sejarah singkat dari Kebun Raya Bogor</p>
					</header>
					<section class="block-body">
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
						<div class="row">
							<div class="col-sm-4 blog-post">
								<a href="#"><h2><?php echo $judul;?></h2></a>
								<img src="<?php echo $gambar;?>">
								<p><?php echo $isi;?>....</p>
								<a href="<?php echo'sejarah-'.$nama.'-'.$select_result['id'];?>">Read More</a>
							</div>
						</div>
<?php }?>
					</section>
				</div>
			</div><!-- #sejarah -->