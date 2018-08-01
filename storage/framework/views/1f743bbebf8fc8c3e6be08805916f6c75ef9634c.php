<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <form   method="post" action="<?php echo e(route('cate.store')); ?>" id="edit_form" enctype="multipart/form-data" >
            <?php echo e(csrf_field()); ?>

            <div class="cate-box col-md-6 col-md-offset-3">
                <div class="left-bar">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">ID:
                            </h3>
                            <span style="color:red; padding-left: 20px;"><?php echo e(Session('success')); ?></span>
                        </div>
                        <div class="box-body pad" style="">
                            <input id="cate-id" type="text" name="cate_id" class="form-control" value=""/>

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

                            <input id="name" type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>"/>

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

                            <input id="note" type="text" name="note" class="form-control" value="<?php echo e(old('name')); ?>"/>

                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-input"><input type="submit" class="btn btn-block btn-info btn-flat" value="Submit"></div>
        </form>
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#edit_form').on("submit",function(e){
                var name = $('#name').val();
                var note = $('#note').val();
                $(".error").remove();
                if(name.length < 2){
                    $('#name').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>