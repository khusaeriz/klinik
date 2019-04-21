
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count['dokter'] ?></h3>

              <p>Data Dokter</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url('dokter') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $count['obat'] ?></h3>

              <p>Data Obat</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus-square-o"></i>
            </div>
            <a href="<?php echo base_url('obat') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo 0 ?></h3>

              <p>Data Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <a href="<?php echo base_url('pemeriksaan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
        <div class="row">
          <div class="col-lg-12">
              <div class="callout callout-info">
                <p>Gunakan Google Chrome Untuk Pengalaman Terbaik.</p>
              </div>
              <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Fitur-fitur Aplikasi Klinik</h3>
                  </div>
                  <div class="box-body">
                Akses dibagi menjadi 2 level, untuk mempermudah pengolahan data klinik, diantaranya: <br><br>
                      <ol>
                            <li><b>Akses Admin</b></li>
                      <ol>
                      <li>Input data dokter</li>
                      <li>Input data pasien</li>
                      <li>Input data obat</li>
                      </ol>
                            <li><b>Akses Dokter</b></li>
                      <ol>
                      <li>Input data pemeriksaan</li>
                      <li>Input data resep</li>
                      
                      </ol>
                          </ol>
                    </div>
              </div>
          </div>
      </div>
      <!-- /.row (main row) -->
