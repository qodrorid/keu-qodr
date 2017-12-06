<!DOCTYPE html>
<html>

<head>
    {% include "layouts/header.volt"%}
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        {%include "layouts/navbar.volt"%} {%include "layouts/sidebar.volt"%}
        <div class="content-wrapper">
            {{ content() }}
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    {%include "layouts/footer.volt"%}
    <!-- ./wrapper -->
</body>

</html>