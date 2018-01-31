<?php
	include "header.php";
?>

<?php
include "koneksi.php";

$edit = mysql_query("SELECT * FROM pages where pages_id='$_GET[pages_id]'");
$r=mysql_fetch_array($edit);
?>

<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Pages</h3>
                        <p class="animated fadeInDown">
                          Pages <span class="fa-angle-right fa"></span> Edit Pages
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Edit Pages</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-24">
                            <div class="form-group">
							<label>Menu</label>
							<input class="form-control" name="jenis" type="text" value="<?php echo $data['menu']; ?>">
							</div>
							<div class="form-group">
							    <label>Link</label>
							    <input class="form-control" name="jenis" type="text" value="<?php echo $data['link']; ?>">
							</div>
							<div class="form-group">
							    <label>Status</label>
							    <input class="form-control" name="jenis" type="text" value="<?php echo $data['status']; ?>">
							</div>
                        <div class="col-md-6">
                            <a href="proses_edit_pages.php?pages_id=<?php echo $data['pages_id']; ?>" type="button" class="btn btn-3d btn-primary">Simpan</a>
                        </div>
                        </div>
                      </div>
                    </div>
<!-- end: content -->

<?php
	include "footer.php";
?>