<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#modal-default" onclick="return send_data_add();">
            Add User
        </button>
    <br><br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="data_user" class="table table-bordered table-striped listUser display responsive no-wrap">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Cabang ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Type</th>
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
    <!-- /.row -->
</section>
<!-- /.content -->

<!-- Modal Add User -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="addUser" action="user/addUser" method="POST">
                <div class="modal-header">
                    <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group-id">
                        <input type="hidden" name="id" class="form-control id" id="id">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="cabang_id" class="form-control" placeholder="Cabang ID">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="text" name="type" class="form-control" placeholder="Type">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnAction" onclick="return addUser();">Edit User</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- / .Modal Add User -->
<div class="modal modal-danger fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="deleteUser" action="user/addUser" method="POST">
                <div class="modal-header">
                    <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus User</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group-id">
                        <input type="hidden" name="id" class="form-control id" id="id">
                    </div>
                    <p>Apakah anda yakin akan menghapus user ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn btn-outline btnAction" onclick="return deleteUser();">Delete User</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- DataTables -->
<?= $this->tag->javascriptInclude('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?> <?= $this->tag->javascriptInclude('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

<script>
    function send_data_add() {
        $('.modal-title').text('Tambah User');
        $('.btnAction').attr('onclick', "return addUser();");
        $('.btnAction').attr('class', "btn btn-primary btnAction");
        $('.btnAction').text('Tambah User');
    }

    function addUser() {
        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= $this->url->get('user/addUser') ?>",
            data: $('form.addUser').serialize(),
            success: function(res) {
                new PNotify({
                    title: res.title,
                    text: res.text,
                    type: res.type,
                    addclass: "stack-bottomright"
                });
                $('.close-modal').click();
            }
        });
    }

    function send_data_edit(id) {
        $('.modal-title').text('Edit User ' + id);
        $('.btnAction').attr('onclick', "return editUser();");
        $('.btnAction').attr('class', "btn btn-warning btnAction");
        $('.btnAction').text('Edit User');

        var username = $('#data_' + id + '> td').eq(1).html();
        var password = $('#data_' + id + '> td').eq(2).html();
        var type = $('#data_' + id + '> td').eq(3).html();

        $('input[name=id]').val(id);
        $('input[name=username]').val(username);
        $('input[name=password]').val(password);
        $('input[name=type]').val(type);
    }

    function editUser() {
        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= $this->url->get('user/editUser') ?>",
            data: $('form.addUser').serialize(),
            success: function(res) {
                new PNotify({
                    title: res.title,
                    text: res.text,
                    type: res.type,
                    addclass: "stack-bottomright"
                });
                $('.close-modal').click();
                listUser();
            }
        });
    }

    function send_data_delete(id) {
        $('input[name=id]').val(id);
        $('.modal-title').text('Delete User ' + id);

        $('.btnAction').attr('onclick', "return deleteUser();");
        $('.btnAction').attr('class', "btn btn-outline btnAction");
        $('.btnAction').text('Delete User');
    }

    function deleteUser() {
        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= $this->url->get('user/deleteUser') ?>",
            data: $('form.deleteUser').serialize(),
            success: function(res) {
                new PNotify({
                    title: res.title,
                    text: res.text,
                    type: res.type,
                    addclass: "stack-bottomright"
                });
                $('.close-modal').click();
            }
        });
    }

    function listUser() {
        $.ajax({
            method: "GET",
            url: "<?= $this->url->get('user/listUser') ?>",
            dataType: "html",
            success: function(res) {
                $('.listUser').html(res);
                console.log(res);
            }
        });
    }

    $(document).ready(function() {
        var dataTable = $('#data_user').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "user/getAjax",
                type: "post",
            }
        });
    });
</script>