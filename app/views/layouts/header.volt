<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Data Tables</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
{{ stylesheet_link("assets/bower_components/bootstrap/dist/css/bootstrap.min.css")}}
<!-- Font Awesome assets -->
{{ stylesheet_link("assets/bower_components/font-awesome/css/font-awesome.min.css")}}
<!-- Ionicons -->
{{ stylesheet_link("assets/bower_components/Ionicons/css/ionicons.min.css")}}

<!-- DataTables -->
{{ stylesheet_link("assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}

<!-- Theme style -->
{{ stylesheet_link("assets/dist/css/AdminLTE.min.css")}}

<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
{{ stylesheet_link("assets/dist/css/skins/_all-skins.min.css")}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-- PNotify -->
{{ stylesheet_link("assets/pnotify/pnotify.css")}} {{ stylesheet_link("assets/pnotify/pnotify.brighttheme.css")}}

<!-- jQuery 3 -->
{{ javascript_include("assets/bower_components/jquery/dist/jquery.min.js")}}

<!-- DataTables -->
{{ javascript_include("assets/bower_components/datatables.net/js/jquery.dataTables.min.js")}} {{ javascript_include("assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}

<!-- Morris -->
<!-- Morris.js charts -->
{{ javascript_include("assets/bower_components/raphael/raphael.min.js")}}
{{ javascript_include("assets/bower_components/morris.js/morris.min.js")}}

{{ stylesheet_link("assets/bower_components/morris.js/morris.css")}}

