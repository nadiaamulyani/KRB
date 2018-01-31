<?php
  include "header.php";
?>             

 <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Feedback</h3>
                        <p class="animated fadeInDown">
                          Feedback <span class="fa-angle-right fa"></span> Data Feedback
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Feedback</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php // Load file koneksi.php
                               include "koneksi1.php";
    
                                $query = "SELECT * FROM feedback"; // Query untuk menampilkan semua data siswa
                                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                                $no=1;
                                while($data = mysqli_fetch_array($sql)){
                                  ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['nama']; ?></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><font color="black"><?php echo $data['pesan']; ?></font></td>
                          <td>
                            <div class="col-md-3">
                                <a href="hapus_feedback.php?id=<?php echo $data['id']; ?>">
                              <button class="btn-flip btn btn-gradient btn-danger">
                                <div class="flip">
                                  <div class="side">
                                    Delete <span class="fa fa-trash"></span>
                                  </div>
                                  <div class="side back">
                                    are you sure?
                                  </div>
                                </div>
                                <span class="icon"></span>
                              </button>
                              </a>
                            </div>
                          </td>
                          <?php } ?>
                        </tr>
                      </tbody>
                        </table>
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