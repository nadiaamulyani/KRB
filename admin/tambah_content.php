<?php
	include "header.php";
?>

<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Content</h3>
                        <p class="animated fadeInDown">
                          Content <span class="fa-angle-right fa"></span> Tambah Content
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tambah Content</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">ID Category</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                  </select>
                                </div>
                            </div>
                          </div>
							<div class="form-group">
							<label>Jenis</label>
							<input class="form-control" name="jenis" type="text" placeholder="Masukan Jenis" required>
							</div>
							<div class="form-group">
							<label>Judul</label>
							<input class="form-control" name="jenis" type="text" placeholder="Masukan Judul" required>
							</div>
							<div class="input-field col s12">
								<label for="last_name"></label>
								<textarea class="ckeditor" id="ckeditor" name="isi"></textarea>
							</div>
							<div class="form-group">
								<p>Pilih File Gambar : <br/><input name='gambar' id='exampleInputfile' type='file'></p>
							</div>
                        <div class="col-md-6">
                            <a href="proses_simpan_content.php?id_content=<?php echo $data['id_content']; ?>" type="button" class="btn btn-3d btn-primary">Simpan</a>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
<!-- end: content -->

<?php
	include "footer.php";
?>