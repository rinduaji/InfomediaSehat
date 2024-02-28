<?php $this->load->view('header');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Report Status Vaksin SDM TELCO 1</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height:500px">
                                    <div class="chart-area">
                                        <canvas id="bar-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Data SDM Telco 1</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="mt-2 text-center small"><b>
                                TOTAL RESPONDEN : <?=$total_responden?> <br>
                                    (<?=round($total_responden_percent,2)?>% dari TOTAL SDM TELCO 1)</b>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Data SDM Telco 1</h6>

                                </div>
                                <!-- Card Body -->
                            <div class="card-body">
                                <div class="mt-2 text-center small"><b>
                                TOTAL BELUM RESPONDEN : <?=$total_belum_responden?> <br>
                                    (<?=round($total_belum_responden_percent,2)?>% dari TOTAL SDM TELCO 1)</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Report Status Vaksin SDM TELCO 1 Per TREG</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height:500px">
                                    <div class="chart-area">
                                        <canvas id="canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total SDM Yang Melapor</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <b>TOTAL SDM YANG MELAPOR : <br><?=array_sum($total_setiap_treg)?><b>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total SDM Yang Belum Melapor</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <b>TOTAL SDM YANG MELAPOR : <br><?=array_sum($total_belum_lapor_setiap_treg)?><b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Status Vaksin SDM TELCO 1 PER TREG</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="table" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>WARNA</th>
                                                    <th>STATUS</th>
                                                    <th>TREG 1</th>
                                                    <th>TREG 2</th>
                                                    <th>TREG 3</th>
                                                    <th>TREG 4</th>
                                                    <th>TREG 5</th>
                                                    <th>TREG 6</th>
                                                    <th>TREG 7</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><div id="box1"></div></th>
                                                    <th>BELUM VAKSIN SAMA SEKALI</th>
                                                    <th><?=$belum_vaksin_treg[1]?></th>
                                                    <th><?=$belum_vaksin_treg[2]?></th>
                                                    <th><?=$belum_vaksin_treg[3]?></th>
                                                    <th><?=$belum_vaksin_treg[4]?></th>
                                                    <th><?=$belum_vaksin_treg[5]?></th>
                                                    <th><?=$belum_vaksin_treg[6]?></th>
                                                    <th><?=$belum_vaksin_treg[7]?></th>
                                                </tr>
                                                <tr>
                                                    <th><div id="box2"></div></th>
                                                    <th>SUDAH VAKSIN 1 BELUM VAKSIN 2</th>
                                                    <th><?=$sudah_vaksin1_treg[1]?></th>
                                                    <th><?=$sudah_vaksin1_treg[2]?></th>
                                                    <th><?=$sudah_vaksin1_treg[3]?></th>
                                                    <th><?=$sudah_vaksin1_treg[4]?></th>
                                                    <th><?=$sudah_vaksin1_treg[5]?></th>
                                                    <th><?=$sudah_vaksin1_treg[6]?></th>
                                                    <th><?=$sudah_vaksin1_treg[7]?></th>
                                                </tr>
                                                <tr>
                                                    <th><div id="box3"></div></th>
                                                    <th>SUDAH VAKSIN 1 & 2</th>
                                                    <th><?=$sudah_vaksin1_2_treg[1]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[2]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[3]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[4]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[5]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[6]?></th>
                                                    <th><?=$sudah_vaksin1_2_treg[7]?></th>
                                                </tr>
                                                <tr>
                                                    <th><div id="box4"></div></th>
                                                    <th>TOTAL</th>
                                                    <th><?=$total_setiap_treg[1]?></th>
                                                    <th><?=$total_setiap_treg[2]?></th>
                                                    <th><?=$total_setiap_treg[3]?></th>
                                                    <th><?=$total_setiap_treg[4]?></th>
                                                    <th><?=$total_setiap_treg[5]?></th>
                                                    <th><?=$total_setiap_treg[6]?></th>
                                                    <th><?=$total_setiap_treg[7]?></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; INFRATEL MALANG 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('index.php/Login/logout')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/')?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/')?>js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url('assets/')?>js/demo/chart-pie-demo.js"></script>

     <!-- Page level plugins -->
    <script src="<?=base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<<?=base_url('assets/')?>js/demo/datatables-demo.js"></script>

    <!-- <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/dataTables.buttons.min.js"></script>
    <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/jszip.min.js"></script>
    <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/pdfmake.min.js"></script>
    <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/vfs_fonts.js"></script>
    <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/buttons.html5.min.js"></script>
    <script src="<<?=base_url('assets/')?>vendor/datatables/export_datatable/buttons.print.min.js"></script> -->

    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>  
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="<?=base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/')?>js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url('assets/')?>js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript">
 

 
  // Return with commas in between
  var numberWithCommas = function(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  };

  

var dataPack1 = [<?=$belum_lapor[1]?>, <?=$belum_lapor[2]?>, <?=$belum_lapor[3]?>, <?=$belum_lapor[4]?>, <?=$belum_lapor[5]?>, <?=$belum_lapor[6]?>];
var dataPack2 = [<?=$sudah_vaksin1_2[1]?>, <?=$sudah_vaksin1_2[2]?>, <?=$sudah_vaksin1_2[3]?>, <?=$sudah_vaksin1_2[4]?>, <?=$sudah_vaksin1_2[5]?>, <?=$sudah_vaksin1_2[6]?>];
var dataPack3 = [<?=$sudah_vaksin1[1]?>, <?=$sudah_vaksin1[2]?>, <?=$sudah_vaksin1[3]?>, <?=$sudah_vaksin1[4]?>, <?=$sudah_vaksin1[5]?>, <?=$sudah_vaksin1[6]?>];
var dataPack4 = [<?=$belum_vaksin[1]?>, <?=$belum_vaksin[2]?>, <?=$belum_vaksin[3]?>, <?=$belum_vaksin[4]?>, <?=$belum_vaksin[5]?>, <?=$belum_vaksin[6]?>];
var dates = ["Segment 1", "Segment 2", "Segment 3", "Segment 4", "Segment 5", "Segment 6"];

var bar_ctx = document.getElementById('bar-chart');

var bar_chart = new Chart(bar_ctx, {
    type: 'bar',
    data: {
        labels: dates,
        datasets: [
        {
            label: 'Belum Lapor',
            data: dataPack1,
						backgroundColor: "#512DA8",
						hoverBackgroundColor: "#7E57C2",
						hoverBorderWidth: 0
        },
        {
            label: 'Sudah Lapor : SUDAH VAKSIN 1 & 2',
            data: dataPack2,
						backgroundColor: "#FFA000",
						hoverBackgroundColor: "#FFCA28",
						hoverBorderWidth: 0
        },
        {
            label: 'Sudah Lapor : SUDAH VAKSIN 1. BELUM VAKSIN 2.',
            data: dataPack3,
						backgroundColor: "#626363",
						hoverBackgroundColor: "#959696",
						hoverBorderWidth: 0
        },
        {
            label: 'Sudah Lapor: BELUM VAKSIN SAMA SEKALI',
            data: dataPack4,
                        backgroundColor: "#D32F2F",
						hoverBackgroundColor: "#EF5350",
						hoverBorderWidth: 0
        },
        ]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom',
        },
     		animation: {
        	duration: 10,
            },
        tooltips: {
					mode: 'label',
          callbacks: {
          label: function(tooltipItem, data) { 
          	return data.datasets[tooltipItem.datasetIndex].label + ": " + numberWithCommas(tooltipItem.yLabel);
          }
          }
         },
        scales: {
          xAxes: [{ 
          	stacked: true, 
            gridLines: { display: false,
             },
            }],
          yAxes: [{ 
          	stacked: true, 
            ticks: {
                stepSize: 10,
                min:0,
        max: 100,// Your absolute max value
        callback: function (value) {
          return (value / 100 * 100).toFixed(0) + '%'; // convert it to percentage
        },
     		 }, 
            }],
        },
    },
   }
);
 
// stack bar group and line chart
var barChartData = {
  labels: [
    "TREG 1",
    "TREG 2",
    "TREG 3",
    "TREG 4",
    "TREG 5",
    "TREG 6",
    "TREG 7"
  ],
  datasets: [
    {
      label: 'TOTAL',
      yAxisID: "line",
      backgroundColor: "#1f2121",
      borderColor: "#000000",
      type: 'line',
      fill: false,
      data: [<?=$total_setiap_treg[1]?>, <?=$total_setiap_treg[2]?>, <?=$total_setiap_treg[3]?>, <?=$total_setiap_treg[4]?>, <?=$total_setiap_treg[5]?>, 
      <?=$total_setiap_treg[6]?>, <?=$total_setiap_treg[7]?> ],
    },
    {
      label: "SUDAH VAKSIN 1 BELUM VAKSIN 2",
      yAxisID: 'bar-stack',
      backgroundColor: "#512DA8",
      borderColor: "#7E57C2",
      borderWidth: 1,
      stack: 'bef',
      data: [<?=$sudah_vaksin1_treg[1]?>, <?=$sudah_vaksin1_treg[2]?>, <?=$sudah_vaksin1_treg[3]?>, <?=$sudah_vaksin1_treg[4]?>,<?=$sudah_vaksin1_treg[5]?>,
      <?=$sudah_vaksin1_treg[6]?>, <?=$sudah_vaksin1_treg[7]?> ]
    },
    {
      label: "SUDAH VAKSIN 1 & 2",
      yAxisID: 'bar-stack',
      backgroundColor: "#FFA000",
      borderColor: "#FFCA28",
      borderWidth: 1,
      stack: 'bef',
      data: [<?=$sudah_vaksin1_2_treg[1]?>, <?=$sudah_vaksin1_2_treg[2]?>, <?=$sudah_vaksin1_2_treg[3]?>, <?=$sudah_vaksin1_2_treg[4]?>,<?=$sudah_vaksin1_2_treg[5]?>,
      <?=$sudah_vaksin1_2_treg[6]?>, <?=$sudah_vaksin1_2_treg[7]?> ]
    },
    {
      label: "BELUM VAKSIN SAMA SEKALI",
      yAxisID: 'bar-stack',
      backgroundColor: "#626363",
      borderColor: "#959696",
      borderWidth: 1,
      stack: 'bef',
      data: [<?=$belum_vaksin_treg[1]?>, <?=$belum_vaksin_treg[2]?>, <?=$belum_vaksin_treg[3]?>, <?=$belum_vaksin_treg[4]?>,<?=$belum_vaksin_treg[5]?>,
      <?=$belum_vaksin_treg[6]?>, <?=$belum_vaksin_treg[7]?> ]
    },
  ]
};

var chartOptions = {
  responsive: true,
  scales: {
    yAxes: [
    {
      id: "bar-stack",
      position: "left",
      stacked: true,
      ticks: {
        beginAtZero: true
      }
    },
    
    {
      id: "line",
      position: "right",
      stacked: false,
      ticks: {
        beginAtZero: true
      },
      gridLines: {
        drawOnChartArea: false, 
      },
      
    }],
    

  },
  legend: {
            display: true,
            position: 'bottom',
    },
  animation: {
        	duration: 10,
        },
        tooltips: {
					mode: 'label',
          callbacks: {
          label: function(tooltipItem, data) { 
          	return data.datasets[tooltipItem.datasetIndex].label + ": " + numberWithCommas(tooltipItem.yLabel);
          }
          }
         },
     		
}

window.onload = function() {
  var ctx = document.getElementById("canvas").getContext("2d");
  window.myBar = new Chart(ctx, {
    type: "bar",
    data: barChartData,
    options: chartOptions,
  });
};
 
 
</script>

</body>
</html>