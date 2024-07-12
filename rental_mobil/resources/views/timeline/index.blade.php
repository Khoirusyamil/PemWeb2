<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Timeline</x-slot> 
<x-slot name="breadcrumb">Timeline</x-slot>

<!-- Content Wrapper. Contains page content -->

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red">28 Juni 2024</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> </span>
                  <h3 class="timeline-header"><a href="#">PemWeb Team</a>Project Rental Mobil</h3>

                  <div class="timeline-body">
                    Project rental mobil ini adalah project dimana masyarakat, mahasiswa, dll
                    dapat dengan mudah menyewa mobil, kami sebagai penyedia rental yang bertugas
                    menyediakan mobil yang akan kami sewakan, tentu dengan bayaran dan kriteria tertentu
                    Berikut adalah anggota dari tim kami :
                    <br>
                    1. Khoirusyamil Yahya
                    <br>
                    2. Aulia Hakim
                    <br>
                    3. Prayoga Hendrik
                    <br>
                    4. Maysarah
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm">Read more</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-users bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i></span>
                  <h3 class="timeline-header no-border"><a href="#">Hakim dan syamil</a> Membuat Database dan project laravel</h3>
                  <div class="timeline-body">
                    kami membuat project laravel baru dengan nama "rental_mobil" dan
                    Database yang kami buat yaitu adalah dbrental, terdapat table-table seperti :
                    <br>
                    1. Armada
                    <br>
                    2. Jenis Kendaraan
                    <br>
                    3. Pembayaran
                    <br>
                    4. Peminjaman
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-users bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> </span>
                  <h3 class="timeline-header"><a href="#">May dan Yoga</a> Membuat logo dan landing page</h3>
                  <div class="timeline-body">
                    Kami membuat logo yang sesuai dengan project kami, yaitu rental mobil
                    serta kami membuat landing page untuk project kami dengan nama "Carbook"
                  </div>
                  <div class="timeline-footer">
                    <!-- <a class="btn btn-warning btn-sm">View comment</a> -->
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green">9 Juli 2024</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-red"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> </span>
                  <h3 class="timeline-header"><a href="#">All</a> Membuat model dan controller</h3>
                  <div class="timeline-body">
                    kami melakukan kerja kelompok lagi untuk membuat backend seperti model dan controller dari masing-masing table
                    yang didalam nya terdapat fungsi CRUD yaitu :
                    <br>C : Create
                    <br>R : Read
                    <br>U : Update
                    <br>D : Delete
                  
                  </div>
                  <div class="timeline-footer">
                    <!-- <a class="btn btn-warning btn-sm">View comment</a> -->
                  </div>
                </div>
              </div>
              <div class="time-label">
                <span class="bg-yellow">10 Juli 2024</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-red"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> </span>
                  <h3 class="timeline-header"><a href="#">syamil</a> Melanjutkan view, dll</h3>
                  <div class="timeline-body">
                    Dalam tahap ini kami membuat view index, form(Untuk Create dan Update), dan view(Untuk merekap data)
                    setelah itu kami membuat login dan register menggunakan brezee serta menyambungkan landing page yang sudah dibuat
                  </div>
                  <div class="timeline-footer">
                    <!-- <a class="btn btn-warning btn-sm">View comment</a> -->
                  </div>
                </div>
              </div>
              <div class="time-label">
                <span class="bg-blue">12 Juli 2024</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-users bg-green"></i>
                
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> </span>
                  <h3 class="timeline-header"><a href="#">All</a> Melakukan finishing</h3>
                  <div class="timeline-body">
                    Dalam tahap terakhir ini kami akan menghosting hasil akhir dari project kami, membuat presentasi dengan project kami, 
                    membuat video tentang project kami, serta mengupload project kami ke dalam berbagai link serpeti : 
                    <br>
                    -> Linked in
                    <br>
                    -> Github
                    <br>
                    -> Link pengumpulan asdos
                  </div>
                  <div class="timeline-footer">
                    <!-- <a class="btn btn-warning btn-sm">View comment</a> -->
                  </div>
                </div>
                
              </div>
              <div>
              <i class="fa fa-camera bg-purple"></i>
              </div>
              <br>
              <div>
              <i class="fas fa-video bg-maroon"></i>
              </div>
              <br>
              <!-- <div>
                <i class="fa fa-camera bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                  <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                  <div class="timeline-body">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                  </div>
                </div>
              </div> -->
              <!-- END timeline item -->
              <!-- timeline item -->
              <!-- <div>
                <i class="fas fa-video bg-maroon"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                  <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                  <div class="timeline-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="timeline-footer">
                    <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                  </div>
                </div>
              </div> -->
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->

</x-layout>