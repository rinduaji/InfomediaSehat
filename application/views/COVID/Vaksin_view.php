<?php $this->load->view('header');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Report Status VAKSINASI</h6>
                            <!-- <?php print_r($data_layanan)?> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <br />
                            <button class="btn btn-success" onclick="add_vaksin()"><i class="glyphicon glyphicon-plus"></i> Add New Vaksin</button>
                            <button class="btn btn-warning" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
                            <br />
                            <br />
                                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Perner</th>
                                            <th>Nama</th>
                                            <th>Segment</th>
                                            <th>Layanan</th>
                                            <th>Site</th>
                                            <th>Treg</th>
                                            <th>Status SDM</th>
                                            <th>Vaksin 1</th>
                                            <th>Vaksin 2</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Perner</th>
                                            <th>Nama</th>
                                            <th>Segment</th>
                                            <th>Layanan</th>
                                            <th>Site</th>
                                            <th>Treg</th>
                                            <th>Status SDM</th>
                                            <th>Vaksin 1</th>
                                            <th>Vaksin 2</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
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

    <script type="text/javascript">
 
var save_method; //for save method string
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "scrollX": true,
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('index.php/Vaksin/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
        dom: 'rBfltip',
        lengthMenu: [ [ 10, 25, 50, 100, -1 ], [ '10', '25', '50', '100', 'All' ]],
        buttons: [
                            'copy',
                            {
                                extend: 'excel',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                                }
                            },
                            {
                                extend: 'pdf',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                                }
                            }, 
                            {
                                extend: 'csv',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                                }
                            }, 
                            {
                                extend: 'print',
                                exportOptions: {
                                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                                }
                            },
                            "colvis"
                        ],
        
 
    });
 
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });
 
});
 
 
 
function add_vaksin()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Vaksin'); // Set Title to Bootstrap modal title
}
 
function edit_vaksin(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
 
    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('index.php/Vaksin/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id"]').val(data.id);
            $('[name="perner"]').val(data.perner);
            $('[name="nama"]').val(data.nama);
            $('[name="segment"]').val(data.segment);
            $('[name="layanan"]').val(data.layanan);
            $('[name="site"]').val(data.site);
            $('[name="treg"]').val(data.treg);
            $('[name="status_sdm"]').val(data.status_sdm);
            $('[name="vaksin1"]').val(data.vaksin1);
            $('[name="vaksin2"]').val(data.vaksin2);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Vaksin'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
 
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;
 
    if(save_method == 'add') {
        url = "<?php echo site_url('index.php/Vaksin/ajax_add')?>";
    } else {
        url = "<?php echo site_url('index.php/Vaksin/ajax_update')?>";
    }
 
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
 
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
 
        }
    });
}
 
function delete_vaksin(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('index.php/Vaksin/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
}

function myFunction(e) {
    // document.getElementById("segment").value = e.target.value;

    $.ajax({
        url : "<?php echo site_url('index.php/Vaksin/search_segment/')?>" + e.target.value,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            // alert(data.segment);
            $('[name="segment"]').val(data.segment);
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function myFunctionTreg(e) {
    // document.getElementById("segment").value = e.target.value;
    
    $.ajax({
        url : "<?php echo site_url('index.php/Vaksin/search_treg/')?>" + e.target.value,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            // alert(data.treg);
            $('[name="treg"]').val(data.treg);
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
 
</script>
 
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Vaksin Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Perner</label>
                            <div class="col-md-9">
                                <input name="perner" placeholder="Perner" class="form-control" type="number">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama" placeholder="Nama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Layanan</label>
                            <div class="col-md-9">
                                <select name="layanan" class="form-control" onchange="myFunction(event)">
                                    <option value="">--Pilih Layanan--</option>
                                    <?php
                                        foreach($data_layanan as $dl){
                                    ?>
                                        <option value="<?=$dl->layanan?>"><?=$dl->layanan?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Segment</label>
                            <div class="col-md-9">
                            <input id="segment" name="segment" placeholder="Segment" class="form-control" type="text" disabled>
                                <!-- <select name="segment" class="form-control">
                                    <option value="">--Pilih Segment--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
									<option value="6">6</option>
                                </select> -->
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Site</label>
                            <div class="col-md-9">
                                <select name="site" class="form-control" onchange="myFunctionTreg(event)">
                                        <option value="">--Pilih Site--</option>
                                        <?php
                                            foreach($data_site as $ds){
                                        ?>
                                            <option value="<?=$ds->site?>"><?=$ds->site?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Treg</label>
                            <div class="col-md-9">
                                <input id="treg" name="treg" placeholder="Treg" class="form-control" type="text" disabled>
                                <!-- <select name="treg" class="form-control">
                                    <option value="">--Pilih Treg--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select> -->
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Status SDM</label>
                            <div class="col-md-9">
                                <select name="status_sdm" class="form-control">
                                    <option value="">--Pilih Status SDM--</option>
                                    <option value="AKTIF">AKTIF</option>
                                    <option value="NON AKTIF">NON AKTIF</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Vaksin 1</label>
                            <div class="col-md-9">
                                <select name="vaksin1" class="form-control">
                                    <option value="">--Pilih Vaksin 1--</option>
                                    <option value="SUDAH">SUDAH</option>
                                    <option value="BELUM">BELUM</option>
                                    <option value="NO ENTRY">NO ENTRY</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Vaksin 2</label>
                            <div class="col-md-9">
                                <select name="vaksin2" class="form-control">
                                    <option value="">--Pilih Vaksin 2--</option>
                                     <option value="SUDAH">SUDAH</option>
                                    <option value="BELUM">BELUM</option>
                                    <option value="NO ENTRY">NO ENTRY</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>