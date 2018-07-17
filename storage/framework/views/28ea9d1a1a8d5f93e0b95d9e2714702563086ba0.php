<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php if(Session('success')): ?>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('cate.update',$cate->cate_id)); ?>" >
            <?php echo e(csrf_field()); ?>


            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">ID:
                    </h3>
                    <span style="padding-left: 10px; font-weight: 800;"><?php echo e(old( 'id', $cate->cate_id)); ?></span>
                </div>
            </div>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Name
                    </h3>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad" style="">

                        <input type="text" name="name" class="form-control" value="<?php echo e(old( 'title', $cate->name)); ?>"/>

                </div>
            </div>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Note
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad" style="">

                        <textarea name="note" id="sample">
                            <?php echo e(old('note',$cate->note)); ?>

                        </textarea>

                </div>
            </div>
            <div class="submit-input"><input type="submit" class="btn btn-block btn-info btn-flat" value="Submit"></div>

        </form>
    </div>
    <script>
        $(document).ready(function () {

        })
    </script>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>