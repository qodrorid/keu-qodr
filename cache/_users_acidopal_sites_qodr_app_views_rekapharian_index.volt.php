<div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Pemasukan</a></li>
          <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Pengeluaran</a></li>
          <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">RAB</a></li>
          <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Perkiraan Pemasukan</a></li>
          
          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="col-md-12">
      <!-- Line chart -->
      <div class="box box-primary collapsed-box">
          <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Report</h3>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
          </div>
          <form method="post" action="pemasukan/filterBulan">
              <div class="box-body" style="">
                  <div class="row">
                      <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                          <div class="small-box bg-aqua">
                              <div class="inner">
                                  <h4>Report Bulanan</h4>
                                  <select name="bulan" class="form-control">
                                      <option selected="selected">Pilih Bulan</option>
                                      <?= $this->Helper->bulan() ?>
                                  </select>
                              </div>
                              <!-- <a href="#" class="small-box-footer">Skuy <i class="fa fa-arrow-circle-right"></i></a> -->
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Skuy</button>
                          </div>
                      </div>
                          <!-- ./col -->
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                              <div class="inner">
                                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                                  <p>Bounce Rate</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                          <!-- ./col -->
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                              <div class="inner">
                                  <h3>44</h3>
                                  <p>User Registrations</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                          <!-- ./col -->
                      <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                              <div class="inner">
                                  <h3>65</h3>
                                  <p>Unique Visitors</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                              </div>
                              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
              </div>
              <!-- /.box-body-->
      </div>
      <!-- /.box -->
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Data Table With Full Features</h3>
                      </div>                            
                                                 
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="pemasukan" class="table table-bordered table-striped listUser display responsive no-wrap">
                              <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>Hari</th>
                                      <th>Pemasukan</th>
                                      
                                  </tr>
                              </thead>
                              
                          </table>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
              <!-- /.col -->
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Data Table With Full Features</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="pengeluaran" class="table table-bordered table-striped listUser display responsive no-wrap">
                              <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>Hari</th>
                                      <th>Pengeluaran</th>
                                      <th>Action</th>
                                      
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                          </table>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
              <!-- /.col -->
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Data Table With Full Features</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="rab" class="table table-bordered table-striped listUser display responsive no-wrap">
                              <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>ID</th>
                                      <th>Periode</th>
                                      <th>Nama Barang</th>
                                      <th>Akun ID</th>
                                      <th>Jumlah Barang</th>
                                      <th>Harga Satuan</th>
                                      <th>Satuan Barang ID</th>
                                      <th>Total Harga</th>
                                      <th>Keterangan</th>
                                      <th>Cabang Id</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                          </table>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
              <!-- /.col -->
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <h3 class="box-title">Data Table With Full Features</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <table id="penghasilan" class="table table-bordered table-striped listUser display responsive no-wrap">
                              <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>Tanggal Cair</th>
                                      <th>Penghasilan</th>
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                          </table>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
              </div>
              <!-- /.col -->
          </div>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
  </div>
  <div class="modal fade" id="modal-default">
<div class="modal-dialog">
  <div class="modal-content">
      <form class="viewPengeluaran" action="pengeluaran/addUser" method="POST">
          <div class="modal-header">
              <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Pengeluaran</h4>
          </div>
          <div class="box-body">
            <table id="data_keuharian" class="table table-bordered table-striped listUser display responsive no-wrap">
                <thead>
                    <tr>
                        <th>Akun ID</th>
                        <th>Cabang ID</th>
                        <th>ID</th>
                        <th>JML Barang</th>
                        <th>Keterangan</th>
                        <th>Kredit</th>
                        <th>Pelaku</th>
                        <th>Tanggal</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
          </div>
          
      </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
  <script>
      $(document).ready(function() {
          var dataTable = $('#rab').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                  url: "Rekapharian/getAjax",
                  type: "post",
              }
          });
      });
      $(document).ready(function() {
          var dataTable = $('#pengeluaran').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                  url: "Pengeluaran/getAjax",
                  type: "post",
              }
          });
      });
      $(document).ready(function() {
          var dataTable = $('#pemasukan').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                  url: "Pemasukan/getAjax",
                  type: "post",
              }
          });
      });
      $(document).ready(function() {
          var dataTable = $('#penghasilan').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                  url: "Penghasilan/getAjax",
                  type: "post",
              }
          });
      });

       function show_data_pengeluaran(Hari){
            $('.modal-title').text('Pengeluaran Hari ' + Hari);
            $('.btnAction').attr('class',"btn btn-outline btnAction");
            $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= $this->url->get('Pengeluaran/getDataPerhari') ?>/" + Hari,
            data: $('form.addUser').serialize(),
            success: function(response) {
                var trHTML = '';
                $.each(response, function (i, item) {
                    trHTML += '<tr><td>' + item.akun_id + '</td><td>' + item.cabang_id + '</td><td>' + item.id + '</td><td>' + item.jml_barang + '</td><td>' + item.keterangan + '</td><td>' + item.kredit + '</td> <td>' + item.pelaku + '</td><td>' + item.tanggal + '</td><td>' + item.total_harga + '</td></tr>';
                });
                $('#data_keuharian').append(trHTML);
            }
        });
        }           
  </script>
