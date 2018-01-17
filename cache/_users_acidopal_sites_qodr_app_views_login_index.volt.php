<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QODR | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <?= $this->tag->stylesheetLink('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>

    <!-- Font Awesome -->
    <?= $this->tag->stylesheetLink('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>

    <!-- Ionicons -->
    <?= $this->tag->stylesheetLink('assets/bower_components/Ionicons/css/ionicons.min.css') ?>

    <!-- Theme style -->
    <?= $this->tag->stylesheetLink('assets/dist/css/AdminLTE.min.css') ?>

    <!-- iCheck -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>QODR</b>.</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= $this->url->get('login/aksiLogin') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="username" class="form-control" name="username" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <?= $this->tag->javascriptInclude('assets/bower_components/jquery/dist/jquery.min.js') ?>

    <!-- Bootstrap 3.3.7 -->
    <?= $this->tag->javascriptInclude('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>

    <!-- iCheck -->

    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>