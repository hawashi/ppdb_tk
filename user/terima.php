

      <div class="col-xl-10 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                            <h4 class="font-weight-bold"><i class="fa fa-bullhorn"></i> Pengumuman</h4></div>
                                            <hr class="sidebar-divider">
                                            <div class="h5 mb-0 text-gray-800">    <h4 class="mb-1 font-weight-bold">Kamu Sudah Diterima</h4>
                                            
                                            <?php foreach($diterima as $trm) : ?>
                                              <p>
                                                  Selamat <?php echo $trm['nama_lengkap'] ?> Sudah Diterima Di Sekolah Islam Bina Insani <br/>
                                                  pada program <?php echo $trm['nama_program'] ?>
                                              </p>
                                            <?php endforeach ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-bullhorn fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>