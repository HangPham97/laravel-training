<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/bootstrap/favicon.ico')); ?>">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('assets/datatables/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    
    <script src="<?php echo e(asset('assets/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <link href="<?php echo e(asset('assets/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo e(asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/bootstrap/css/navbar-fixed-top.css')); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo e(asset('assets/bootstrap/js/ie-emulation-modes-warning.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="hold-transition skin-blue sidebar-mini" style="padding-top:0 !important; min-height: 900px" >
<div class="wrapper">
    <?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layout.side', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layout.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(asset('assets/jquery/jquery-1.12.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/dataTables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dataTables/js/dataTables.bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/validator/validator.min.js')); ?>"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo e(asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
<!-- CK Editor -->
<script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
<!-- page script -->
<script>
    CKEDITOR.replace('content')

    $(function() {
        $('#content').ckeditor({
            toolbar: 'Full',
            enterMode : CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_P,
        });
    });

    CKEDITOR.on( 'instanceReady', function( ev ) {
        // Ends self-closing tags the HTML4 way, like <br>.
        ev.editor.dataProcessor.writer.selfClosingEnd = '>';
    });
</script>
<script type="text/javascript">
    var table = $('#admin-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "<?php echo e(route('table')); ?>",

        columns: [
            {data: 'news_id', name: 'news_id',"width":"5%"},
            {data: 'title', name: 'title',"width":"15%"},
            {data: 'sample', name: 'sample',"width":"20%"},
            {data: 'content',name: 'content',"width":"30%"},
            {data: 'category', name: 'category', "width":"15%"},
            {data: 'action', name: 'action', orderable: false, searchable: false,"width":"15%"},
        ]
    });




</script>
<script>
    $(document).ready(function(){
        $('#edit_form').submit(function(e){
            var title = $('#title').val();
            var sample = $('#sample').val();
            var content = $('#content').val();
            $(".error").remove();
            if(title.length < 10){
                $('#title').before('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                e.preventDefault();
            }
            if (sample.length < 10){
                $('#sample').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                e.preventDefault();
            }
            if (content.length < 10){
                $('#content').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                e.preventDefault();
            }
        })
    })
</script>
<?php echo $__env->yieldContent('script'); ?>

</body>
</html>