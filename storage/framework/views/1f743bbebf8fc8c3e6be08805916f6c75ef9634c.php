<!-- Content Wrapper. Contains page content -->
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

                                <div class="panel-body row">

                                    <form method="post" action="<?php echo e(route('cate.store')); ?>" id="edit_form"
                                          enctype="multipart/form-data" style="width: 100%">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="col-md-12">
                                            <div class="cate-box col-md-6 col-md-offset-3">
                                                <div class="box-boder">
                                                    <div class="box box-padding">
                                                        <div class="box-header box-id">
                                                            <h3 class="box-title">ID:
                                                            </h3>

                                                            <div class="box-body pad" style="">
                                                                <input id="cate-id" type="text" name="cate_id" class="form-control" value=""/>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Name
                                                            </h3>
                                                            <!-- /. tools -->
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad" style="">

                                                            <input id="name" type="text" name="name" class="form-control" value="Đời Sống">

                                                        </div>
                                                    </div>
                                                    <div class="box box-note">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Note
                                                            </h3>
                                                            <!-- /. tools -->
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad" style="">

                                                            <input id="note" type="text" name="note" class="form-control" value="">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-input"><input type="submit"
                                                                         class="btn btn-block btn-info btn-flat"
                                                                         value="Submit"></div>
                                    </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#edit_form').on("submit",function(e){
                var name = $('#name').val();
                var cate= $('#cate-id').val();
                $(".error").remove();
                if(name.length < 2){
                    $('#name').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }if(cate.length < 2){
                    $('#cate-id').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterDashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>