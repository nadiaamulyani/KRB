<?php
	include "header.php";
?>

<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Pages</h3>
                        <p class="animated fadeInDown">
                          Pages <span class="fa-angle-right fa"></span> Tambah Pages
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tambah Pages</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
							<div class="form-group">
							<label>Menu</label>
							<input class="form-control" name="jenis" type="text" placeholder="Masukan Menu" required>
							</div>
							<div class="form-group">
							<label>Link</label>
							<input class="form-control" name="jenis" type="text" placeholder="Masukan Link" required>
							</div>
							<div class="form-group">
							<label>Status</label>
							<input class="form-control" name="jenis" type="text" placeholder="Masukan Status" required>
                        <div class="col-md-6">
                            <a href="proses_simpan_pages.php?pages_id=<?php echo $data['pages_id']; ?>" type="button" class="btn btn-3d btn-primary">Simpan</a>
                        </div>
                        </div>
                      </div>
                    </div>
<!-- end: content -->

<?php
	include "footer.php";
?>