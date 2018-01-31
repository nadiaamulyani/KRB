<?php
  include "header.php";
?>             

 <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Pages</h3>
                        <p class="animated fadeInDown">
                          Pages <span class="fa-angle-right fa"></span> Data Pages
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Pages</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Menu</th>
                          <th>Link</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php // Load file koneksi.php
                               include "koneksi1.php";
    
                                $query = "SELECT * FROM pages"; // Query untuk menampilkan semua data siswa
                                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                                $no=1;
                                while($data = mysqli_fetch_array($sql)){
                                  ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['menu']; ?></td>
                          <td><?php echo $data['link']; ?></td>
                          <td><font color="black"><?php echo $data['status']; ?></font></td>
                          <td>
                            <div class="col-md-6">
                            <a href="edit_pages.php?pages_id=<?php echo $data['pages_id']; ?>" type="button" class="btn btn-3d btn-default">Edit</a>
                            <a href="hapus_pages.php?pages_id=<?php echo $data['pages_id']; ?>" type="button" class="btn btn-3d btn-danger">Delete</a>
                            </div>
                          </td>
                          <?php } ?>
                        </tr>
                      </tbody>
                        </table>
                        <div class="col-md-6">
                            <a href="tambah_pages.php?pages_id=<?php echo $data['pages_id']; ?>" type="button" class="btn btn-3d btn-primary">Added</a>
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