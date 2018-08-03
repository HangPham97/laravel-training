<?php $__env->startSection('sidebar-wrapper'); ?>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href=<?php echo e(route('home')); ?>>
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="table-list active">
                <a class="toggle-down">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Table List</p>
                </a>
                <ul class="table-menu">
                    <li class="news-table">
                        <a href="<?php echo e(route('news.home')); ?>">News</a>
                    </li>
                    <li class="category-table">
                        <a href="<?php echo e(route('cate.home')); ?>">Category</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="alert"><p style="color:red;">
                            <?php echo e(Session('success')); ?>

                        </p>
                    </div>
                    <div class="">

                        <div class="">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12">
                                    <h4 class="box-title col-md-6">Category Table</h4>
                                    <div class="add_button">
                                        <button type="button" class="btn btn-block btn-info btn-flat">
                                            <a href="<?php echo e(route('cate.create')); ?>">Add</a>
                                        </button>
                                    </div>
                                </div>

                                <div class="panel-body row">


                                    <table id="admin-table" class="table table-striped col-md-12">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="col-md-1" style="width: 300px !important;">Name</th>
                                            <th class="col-md-1" style="width: 300px !important;">Note</th>
                                            <th class="col-md-3">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="<?php echo e(asset('assets/dataTables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dataTables/js/dataTables.bootstrap.min.js')); ?>"></script>

    <script type="text/javascript">

        var table = $('#admin-table').DataTable({
            processing: true,
            serverSide: true,

            ajax: {
                url: "<?php echo e(route('category')); ?>",
                // data: function (d) {
                //     d.title = $('input[name=title]').val();
                //     d.category = $('input[name=category]').val();
                // }
            },
            columns: [
                {data: 'cate_id', name: 'cate_id', "width": "4%"},
                {data: 'name', name: 'name', "width": "15%"},
                {data: 'note', name: 'note', "width": "19%"},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "14%"},
            ]
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterDashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>