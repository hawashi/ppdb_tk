<!-- Begin Page Content -->


<!-- Page Heading -->
<h1 class="h3 mb-2 weight-bold text-center">Dashboard</h1>
<!-- <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme.
    The charts below have been customized - for further customization options, please visit the <a
        target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
        documentation</a>.</p> -->



 <!-- Earnings (Monthly) Card Example -->


        <!-- Area Chart -->
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
                Styling for the area chart can be found in the
                <code>/js/demo/chart-area-demo.js</code> file.
            </div>
        </div> -->

        <!-- Bar Chart -->
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
                <hr>
                Styling for the bar chart can be found in the
                <code>/js/demo/chart-bar-demo.js</code> file.
            </div>
        </div> -->
        
        <!-- Pending Requests Card Example -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pendaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php 
                                        $jumlah_pendaftar = mysqli_query($conn,"SELECT * from pendaftar");
                                        echo mysqli_num_rows($jumlah_pendaftar);
                                        ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Penunggu Keputusan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jml_tunggu; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pendaftar Diterima</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                <?php 
                                        $jumlah_terima = mysqli_query($conn,"SELECT * from pendaftar WHERE stat = 'Diterima'");
                                        echo mysqli_num_rows($jumlah_terima);
                                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    <div class="col-xl-8 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Jumlah Murid</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <!-- <canvas id="myPieChart"></canvas> -->
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                 <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Taman Kanak-kanak
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Play Group
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Penitipan Anak
                </span>
                 </div>
            </div>
        </div>
    </div>
                    </div>

    <!-- Donut Chart -->
    


<!-- /.container-fluid -->


<!-- End of Main Content -->
