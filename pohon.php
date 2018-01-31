			<div class="content-block" id="pohon">
				<div class="container">
					<header class="block-heading cleafix">
						<h1>Koleksi Tanaman</h1>
						<p>Berikut adalah beberama koleksi tanaman yang ada di Kebun Raya Bogor</p>
					</header>
					<section class="block-body">
<?php
include "../koneksi.php";
$no=0;
$data = "SELECT * from content where id_category = 3";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$no++;
$judul          = $select_result['judul'];
$isi         = substr ($select_result['isi'],0,130);
$gambar        = "../images/".$select_result['gambar'];

?>
						<div class="row">
							<div class="col-sm-4 blog-post">
								<a href="#"><h2><?php echo $judul;?></h2></a>
								<img src="<?php echo $gambar;?>">
								<p><?php echo $isi;?>....</p>
								<a href="more_pohon.php?id=<?php echo $select_result['id'];?>">Read More</a>
							</div>
						</div>
<?php }?>
					</section>
				</div>
			</div><!-- #pohon -->