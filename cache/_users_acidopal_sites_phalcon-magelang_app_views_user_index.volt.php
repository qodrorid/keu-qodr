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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?> <?php foreach ($data_user as $user) { ?>
                            <tr id="data_<?= $user->id ?>">
                                </a>
                                </a>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->password ?></td>
                                <td><?= $user->type ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default" onclick="return send_data_edit('<?= $user->id ?>');">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" onclick="return hapus_data_user();">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group-id">
                        <input type="hidden" name="id" class="form-control id" id="id">
                    </div>
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

<script>
    function send_data_add() {
        $('.modal-title').text('Tambah User');
        $('.input-group-id').remove();
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
            succes: function(res) {
                new PNotify({
                    title: res.title,
                    text: res.text,
                    type: res.type,
                });
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
            succes: function(res) {
                new PNotify({
                    title: res.title,
                    text: res.text,
                    type: res.type,
                });
            }
        });
    }
</script>