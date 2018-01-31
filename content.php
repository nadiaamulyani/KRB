<?php
  include "header.php";
?>	           

 <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Content</h3>
                        <p class="animated fadeInDown">
                          Content <span class="fa-angle-right fa"></span> Data Content
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Content</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Jenis</th>
                          <th>Judul</th>
                          <th>Isi</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
              <?php // Load file koneksi.php
                               include "koneksi1.php";
    
                                $query = "SELECT * FROM content"; // Query untuk menampilkan semua data siswa
                                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                                $no=1;
                                while($data = mysqli_fetch_array($sql)){
                                  ?> 
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['jenis']; ?></td>
                          <td><?php echo $data['judul']; ?></td>
                          <td><font color="black"><?php echo $data['isi']; ?></font></td>
                          <td><img src="images/<?php echo $data['gambar'];?>" width="90" border="0"/></td>
                          <td>
                        <div class="col-md-6">
                            <a href="edit_content.php?id_content=<?php echo $data['id_content']; ?>" type="button" class="btn btn-3d btn-default">Edit</a>
                            <a href="hapus_content.php?id_content=<?php echo $data['id_content']; ?>" type="button" class="btn btn-3d btn-danger">Delete</a>
                        </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                        </table>
                        <div class="col-md-6">
                            <a href="tambah_content.php?id_content=<?php echo $data['id_content']; ?>" type="button" class="btn btn-3d btn-primary">Added</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
<?php
  include "footer.php";
?>