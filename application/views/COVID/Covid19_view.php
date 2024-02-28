<?php $this->load->view('header');?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Report Status SDM Terpapar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <br />
                                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRecords">
                                Add New
                            </button>

                            <button class="btn btn-warning" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
                            
                            <br />
                            <br />
                            
                                            
                            <div class="container">
                            <!-- Add Records Modal -->
                            <div class="modal fade" id="addRecords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Add Record Form -->
                                            <form id="addRecordForm">

                                                <!-- Name -->
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="nama" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" id="perner" placeholder="Perner" aria-label="Perner" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="fungsi" placeholder="Fungsi" aria-label="Fungsi" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="jenis_swab" placeholder="Jenis SWAB" aria-label="Jenis SWAB" aria-describedby="basic-addon1"> -->
                                                    <select class="form-control" id="jenis_swab" aria-label="Jenis SWAB" aria-describedby="basic-addon1">
                                                        <option value=""> -- Pilih Jenis SWAB -- </option>
                                                        <option value="SWAB ANTIGEN">SWAB ANTIGEN</option>
                                                        <option value="SWAB PCR">SWAB PCR</option>
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="loker" placeholder="WFO / WFH" aria-label="loker" aria-describedby="basic-addon1"> -->
                                                    <select class="form-control" id="loker" aria-label="loker" aria-describedby="basic-addon1">
                                                        <option value=""> -- Pilih Posisi Bekerja -- </option>
                                                        <option value="WFO">WFO</option>
                                                        <option value="WFH">WFH</option>
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Update Kondisi</span>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="update_kondisi" placeholder="Update Kondisi" aria-label="Update Kondisi" aria-describedby="basic-addon1"> -->
                                                    <textarea class="update_kondisi" id="summernote" name="" aria-label="Update Kondisi" aria-describedby="basic-addon1"></textarea>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Tanggal Positif</span>
                                                    </div>
                                                    <input type="date" class="form-control" id="tgl_positif" placeholder="Tanggal Positif" aria-label="Tanggal Positif" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Tanggal Negatif</span>
                                                    </div>
                                                    <input type="date" class="form-control" id="tgl_negatif" placeholder="Tanggal Negatif" aria-label="Tanggal Negatif" aria-describedby="basic-addon1">
                                                </div>

                                                <!-- <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" id="tgl_update_kondisi" placeholder="Tanggal Update Kondisi" aria-label="Tanggal Update Kondisi" aria-describedby="basic-addon1">
                                                </div> -->

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" id="hasil_swab" placeholder="Hasil SWAB" aria-label="Hasil SWAB" aria-describedby="basic-addon1"> -->
                                                    <select class="form-control" id="hasil_swab" aria-label="Hasil SWAB" aria-describedby="basic-addon1">
                                                        <option value=""> -- Pilih Hasil SWAB -- </option>
                                                        <option value="Positif">Positif</option>
                                                        <option value="Negatif">Negatif</option>
                                                    </select>
                                                </div>

                                                <!-- Image -->
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="img">
                                                    <label class="custom-file-label" for="customFile">Evidence SWAB</label>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            <!-- Insert Button -->
                                            <button type="button" class="btn btn-primary" id="add">Add Record</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Records Modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="editRecords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row text-center">
                                                    <div class="col-md-12 my-3">
                                                        <div id="show_img"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- Edit Record Form -->
                                                        <form id="editForm">

                                                            <!-- ID -->
                                                            <input type="hidden" id="edit_record_id">

                                                            <!-- Name -->
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="edit_nama" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <input type="number" class="form-control" id="edit_perner" placeholder="Perner" aria-label="Perner" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" id="edit_fungsi" placeholder="Fungsi" aria-label="Fungsi" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <!-- <input type="text" class="form-control" id="edit_jenis_swab" placeholder="Jenis SWAB" aria-label="Jenis SWAB" aria-describedby="basic-addon1"> -->
                                                                <select class="form-control" id="edit_jenis_swab" aria-label="Jenis SWAB" aria-describedby="basic-addon1">
                                                                    <option value=""> -- Pilih Jenis SWAB -- </option>
                                                                    <option value="SWAB ANTIGEN">SWAB ANTIGEN</option>
                                                                    <option value="SWAB PCR">SWAB PCR</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <!-- <input type="text" class="form-control" id="edit_loker" placeholder="WFH / WFO" aria-label="WFH / WFO" aria-describedby="basic-addon1"> -->
                                                                <select class="form-control" id="edit_loker" aria-label="loker" aria-describedby="basic-addon1">
                                                                    <option value=""> -- Pilih Posisi Bekerja -- </option>
                                                                    <option value="WFO">WFO</option>
                                                                    <option value="WFH">WFH</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Update Kondisi</span>
                                                                </div>
                                                                <!-- <input type="text" class="form-control" id="edit_update_kondisi" placeholder="Update Kondisi" aria-label="Update Kondisi" aria-describedby="basic-addon1"> -->
                                                                <textarea class="edit_update_kondisi" id="summernote1" name="" aria-label="Update Kondisi" aria-describedby="basic-addon1"></textarea>
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Tanggal Positif</span>
                                                                </div>
                                                                <input type="date" class="form-control" id="edit_tgl_positif" placeholder="Tanggal Positif" aria-label="Tanggal Positif" aria-describedby="basic-addon1">
                                                            </div>

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i>&nbsp;&nbsp;Tanggal Negatif</span>
                                                                </div>
                                                                <input type="date" class="form-control" id="edit_tgl_negatif" placeholder="Tanggal Negatif" aria-label="Tanggal Negatif" aria-describedby="basic-addon1">
                                                            </div>

                                                            <!-- <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <input type="date" class="form-control" id="edit_tgl_update_kondisi" placeholder="Tanggal Kondisi" aria-label="Tanggal Kondisi" aria-describedby="basic-addon1">
                                                            </div> -->

                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                </div>
                                                                <!-- <input type="text" class="form-control" id="edit_hasil_swab" placeholder="Hasil SWAB" aria-label="Hasil SWAB" aria-describedby="basic-addon1"> -->
                                                                <select class="form-control" id="edit_hasil_swab" aria-label="Hasil SWAB" aria-describedby="basic-addon1">
                                                                    <option value=""> -- Pilih Hasil SWAB -- </option>
                                                                    <option value="Positif">Positif</option>
                                                                    <option value="Negatif">Negatif</option>
                                                                </select>
                                                            </div>

                                                            <!-- Image -->
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="edit_img">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            <!-- Update Button -->
                                            <button type="button" class="btn btn-primary" id="update">Update Record</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <table class="table table-bordered" id="recordTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Perner</th>
                                            <th>Fungsi</th>
                                            <th>WFO / WFH</th>
                                            <th>Jenis SWAB</th>
                                            <th>Update Kondisi</th>
                                            <th>Tanggal Positif</th>
                                            <th>Tanggal Negatif</th>
                                            <th>Tanggal Update Kondisi</th>
                                            <th>Hasil SWAB</th>
                                            <th>Evidence SWAB</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Perner</th>
                                            <th>Fungsi</th>
                                            <th>WFO / WFH</th>
                                            <th>Jenis SWAB</th>
                                            <th>Update Kondisi</th>
                                            <th>Tanggal Positif</th>
                                            <th>Tanggal Negatif</th>
                                            <th>Tanggal Update Kondisi</th>
                                            <th>Hasil SWAB</th>
                                            <th>Evidence SWAB</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <input type="hidden" value="<?php echo base_url('index.php/Covid19/'); ?>" id="base_url">
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
    <script src="https://cdn.datatables.net/plug-ins/1.10.25/dataRender/datetime.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

 
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote1').summernote();
        });
        
        $(".custom-file-input").on("change", function() {
            let fileName = $(this).val().split("\\").pop();
            let label = $(this).siblings(".custom-file-label");

            if (label.data("default-title") === undefined) {
                label.data("default-title", label.html());
            }

            if (fileName === "") {
                label.removeClass("selected").html(label.data("default-title"));
            } else {
                label.addClass("selected").html(fileName);
            }
        });

        /* ---------------------------- Add Records Modal --------------------------- */

        $("#addRecords").on("hide.bs.modal", function(e) {
            // do something...
            $("#addRecordForm")[0].reset();
            $(".custom-file-label").html("Choose file");
        });

        /* ---------------------------- Edit Record Modal --------------------------- */

        $("#editRecords").on("hide.bs.modal", function(e) {
            // do something...
            $("#editForm")[0].reset();
            $(".custom-file-label").html("Choose file");
        });

        /* --------------------------------- Baseurl -------------------------------- */
        var base_url = $("#base_url").val();

        /* -------------------------------------------------------------------------- */
        /*                               Insert Records                               */
        /* -------------------------------------------------------------------------- */

        $(document).on("click", "#add", function(e) {
            e.preventDefault();

            var nama = $("#nama").val();
            var fungsi = $("#fungsi").val();
            var perner = $("#perner").val();
            var jenis_swab = $("#jenis_swab").val();
            var loker = $("#loker").val();
            var update_kondisi = $(".update_kondisi").val();
            var tgl_positif = $("#tgl_positif").val();
            var tgl_negatif = $("#tgl_negatif").val();
            var tgl_update_kondisi = moment().format("YYYY-MM-DD");
            var hasil_swab = $("#hasil_swab").val();
            var img = $("#img")[0].files[0];
            
            if (nama == "" || fungsi == "" || jenis_swab == "" || loker == "" || tgl_positif == "" || update_kondisi == "" || 
            tgl_update_kondisi == "" || hasil_swab == "" || perner == "") {
                // alert("All field are required");
                toastr["warning"]("All field are required");
            } else {
                var fd = new FormData();

                fd.append("nama", nama);
                fd.append("perner", perner);
                fd.append("fungsi", fungsi);
                fd.append("jenis_swab", jenis_swab);
                fd.append("loker", loker);
                fd.append("update_kondisi", update_kondisi);
                fd.append("tgl_positif", tgl_positif);
                fd.append("tgl_negatif", tgl_negatif);
                fd.append("tgl_update_kondisi", tgl_update_kondisi);
                fd.append("hasil_swab", hasil_swab);
                if ($("#img")[0].files.length > 0) {
                    fd.append("img", img);
                }
                
                $.ajax({
                    type: "post",
                    url: base_url + "insert",
                    data: fd,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            toastr["success"](response.message);
                            $("#addRecords").modal("hide");
                            $("#addRecordForm")[0].reset();
                            $(".add-file-label").html("Choose file");
                            $("#recordTable").DataTable().destroy();
                            fetch();
                        } else {
                            toastr["error"](response.message);
                        }
                    },
                });
            }
        });



        /* -------------------------------------------------------------------------- */
        /*                                Fetch Records                               */
        /* -------------------------------------------------------------------------- */

        function fetch() {
            $.ajax({
                type: "get",
                url: base_url + "fetch",
                dataType: "json",
                success: function(response) {
                    var i = "1";

                    

                    $("#recordTable").DataTable({
                        data: response,
                        "scrollX": true,
                        responsive: true,
                        dom: "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        lengthMenu: [ [ 10, 25, 50, 100, -1 ], [ '10', '25', '50', '100', 'All' ]],
                        buttons: [
                            'copy',
                            {
                                extend: 'excel',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                                }
                            },
                            {
                                extend: 'pdf',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                                }
                            }, 
                            {
                                extend: 'csv',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                                }
                            }, 
                            {
                                extend: 'print',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                                }
                            },
                            "colvis"
                        ],
                        columns: [{
                                data: "id",
                                render: function(data, type, row, meta) {
                                    return i++;
                                },
                            },
                            {
                                data: "nama",
                            },
                            {
                                data: "perner",
                            },
                            {
                                data: "fungsi",
                            },
                            {
                                data: "jenis_swab",
                            },
                            {
                                data: "loker",
                            },
                            {
                                data: "update_kondisi",
                            },
                            {
                                data: "tgl_positif",
                                render: function(data, type, row){
                                    if(type === "sort" || type === "type"){
                                        return data;
                                    }
                                    return moment(data).format("dddd, D MMMM YYYY");
                                }
                            },
                            {
                                data: "tgl_negatif",
                                render: function(data, type, row){
                                    if(type === "sort" || type === "type"){
                                        return data;
                                    }
                                    return moment(data).format("dddd, D MMMM YYYY");
                                }
                            },
                            {
                                data: "tgl_update_kondisi",
                                render: function(data, type, row){
                                    if(type === "sort" || type === "type"){
                                        return data;
                                    }
                                    return moment(data).format("dddd, D MMMM YYYY");
                                }
                            },
                            {
                                data: "hasil_swab",
                            },
                            {
                                data: "img",
                                render: function(data, type, row, meta) {
                                    var a = `
                                        <img src="<?=base_url()?>/assets/uploads/${row.img}" width="150" height="150" />
                                    `;
                                    if(row.img == null) {
                                        a = `
                                        <img src="<?=base_url()?>/assets/uploads/default.png" width="150" height="150" />
                                    `;
                                    }
                                    return a;
                                },
                            },
                            {
                                orderable: false,
                                searchable: false,
                                data: function(row, type, set) {
                                    return `
                                        <a href="#" id="del" class="btn btn-sm btn-outline-danger" value="${row.id}"><i class="fas fa-trash-alt"></i></a>
                                        <a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${row.id}"><i class="fas fa-edit"></i></a>
                                    `;
                                },
                            },
                        ],
                    });
                },
            });
        }

        fetch();

        /* -------------------------------------------------------------------------- */
        /*                               Delete Records                               */
        /* -------------------------------------------------------------------------- */

        $(document).on("click", "#del", function(e) {
            e.preventDefault();

            var del_id = $(this).attr("value");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: base_url + "delete",
                        data: {
                            del_id: del_id,
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.res == "success") {
                                Swal.fire(
                                    "Deleted!",
                                    "Your file has been deleted.",
                                    "success"
                                );
                                $("#recordTable").DataTable().destroy();
                                fetch();
                            }
                        },
                    });
                }
            });
        });

        /* -------------------------------------------------------------------------- */
        /*                                Edit Records                                */
        /* -------------------------------------------------------------------------- */

        $(document).on("click", "#edit", function(e) {
            e.preventDefault();

            var edit_id = $(this).attr("value");

            $.ajax({
                url: base_url + "edit",
                type: "get",
                dataType: "JSON",
                data: {
                    edit_id: edit_id,
                },
                success: function(data) {
                    if (data.res === "success") {
                        $("#editRecords").modal("show");
                        $("#edit_record_id").val(data.post.id);
                        $("#edit_nama").val(data.post.nama);
                        $("#edit_perner").val(data.post.perner);
                        $("#edit_fungsi").val(data.post.fungsi);
                        $("#edit_jenis_swab").val(data.post.jenis_swab);
                        $("#edit_loker").val(data.post.loker);
                        var markupStr = data.post.update_kondisi;
                        $('#summernote1').summernote('code', markupStr);
                        // $(".edit_update_kondisi").val(data.post.update_kondisi);
                        $("#edit_tgl_positif").val(data.post.tgl_positif);
                        $("#edit_tgl_negatif").val(data.post.tgl_negatif);
                        $("#edit_tgl_update_kondisi").val(data.post.tgl_update_kondisi);
                        $("#edit_hasil_swab").val(data.post.hasil_swab);
                        // $("#edit_img").val(data.post.img);
                        $(".custom-file-label").html(data.post.img);
                        if(data.post.img == null){
                            $("#show_img").html(`
                                <img src="<?=base_url()?>assets/uploads/default.png" width="150" height="150" class="rounded img-thumbnail">
                            `);
                        }
                        else {
                            $("#show_img").html(`
                                <img src="<?=base_url()?>assets/uploads/${data.post.img}" width="150" height="150" class="rounded img-thumbnail">
                            `);
                        }
                    } else {
                        toastr["error"](data.message, "Error");
                    }
                },
            });
        });

        /* -------------------------------------------------------------------------- */
        /*                               Update Records                               */
        /* -------------------------------------------------------------------------- */

        $(document).on("click", "#update", function(e) {
            e.preventDefault();

            var edit_id = $("#edit_record_id").val();
            var nama = $("#edit_nama").val();
            var perner = $("#edit_perner").val();
            var fungsi = $("#edit_fungsi").val();
            var jenis_swab = $("#edit_jenis_swab").val();
            var loker = $("#edit_loker").val();
            var update_kondisi = $(".edit_update_kondisi").val();
            var tgl_positif = $("#edit_tgl_positif").val();
            var tgl_negatif = $("#edit_tgl_negatif").val();
            var tgl_update_kondisi = moment().format("YYYY-MM-DD");
            var hasil_swab = $("#edit_hasil_swab").val();
            var edit_img = $("#edit_img")[0].files[0];

            if (nama == "" || fungsi == "" || jenis_swab == "" || loker == "" || update_kondisi == "" || tgl_positif == "" || 
            tgl_update_kondisi == "" || hasil_swab == "" || perner == "") {
                // alert("All field are required");
                toastr["warning"]("All field are required");
            } else {
                var fd = new FormData();

                fd.append("edit_id", edit_id);
                fd.append("nama", nama);
                fd.append("perner", perner);
                fd.append("fungsi", fungsi);
                fd.append("jenis_swab", jenis_swab);
                fd.append("loker", loker);
                fd.append("update_kondisi", update_kondisi);
                fd.append("tgl_positif", tgl_positif);
                fd.append("tgl_negatif", tgl_negatif);
                fd.append("tgl_update_kondisi", tgl_update_kondisi);
                fd.append("hasil_swab", hasil_swab);
                if ($("#edit_img")[0].files.length > 0) {
                    fd.append("edit_img", edit_img);
                }

                $.ajax({
                    type: "post",
                    url: base_url + "update",
                    data: fd,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            toastr["success"](response.message);
                            $("#editRecords").modal("hide");
                            $("#editForm")[0].reset();
                            $(".edit-file-label").html("Choose file");
                            $("#recordTable").DataTable().destroy();
                            fetch();
                        } else {
                            toastr["error"](response.message);
                        }
                    },
                });
            }
        });
    </script>
<!-- End Bootstrap modal -->
</body>
</html>
