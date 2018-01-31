			<div class="content-block" id="tempat">
				<div class="container">
					<header class="block-heading cleafix">
						<h1>Tempat Favorit</h1>
						<p>Kebun Raya Bogor mempunyai beberapa tempat favorit diantaranya sebagai berikut</p>
					</header>
				<section class="block-body">
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
						<div class="row">
							<div class="col-sm-4">
								<a href="<?php echo'tempat-'.$judul.'-'.$select_result['id'];?>" class="recent-work" style="background-image:url(<?php echo $gambar;?>)">
									<span class="btn btn-o-white"><?php echo $judul;?></span>
								</a>
							</div>
						</div>
<?php }?>
					</section>
				</div>
			</div><!-- #tempat -->