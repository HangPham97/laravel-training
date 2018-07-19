<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper add-wrapper" >

        <form class="col-md-offset-2 col-md-8" id="edit_form" method="post" action="<?php echo e(route('news.store')); ?>" >
            <?php echo e(csrf_field()); ?>


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ID
                    </h3>
                    <span style="color:red; padding-left: 20px;"><?php echo e(Session('success')); ?></span>
                    <div class="box-body pad" style="">
                        <input id="news_id" type="text" required name="news_id" value="<?php echo e(old('news_id')); ?>" class="form-control"/>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Title
                    </h3>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad" style="">

                        <input id="title" type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>"/>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sample
                    </h3>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <input id="sample" type="text" name="sample" class="form-control" value="<?php echo e(old('sample')); ?>"/>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Content
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
                        <textarea name="news_content" id="content" >
                            <?php echo Request::old('news_content'); ?>

                        </textarea>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Category
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
                <div class="box-body pad cate-pad" style="">
                        <?php $__currentLoopData = $cate_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                        <input class="form-check-input" name="cate[]"  type="checkbox" id="<?php echo e($cate->id); ?>" value="<?php echo e($cate->cate_id); ?>" <?php echo e((is_array(old('cate')) && in_array($cate->cate_id, old('cate'))) ? ' checked' : ''); ?>> <?php echo e($cate->name); ?>

                                </label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="submit-input"><input type="submit" class="btn btn-block btn-info btn-flat" value="Submit"></div>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#edit_form').on("submit",function(e){
                var news_id = $('#news_id').val();
                var title = $('#title').val();
                var sample = $('#sample').val();
                var content = CKEDITOR.instances['content'].getData();

                $(".error").remove();
                if(news_id.length < 5){
                    $('#news_id').before('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if(title.length < 10){
                    $('#title').before('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (sample.length < 10){
                    $('#sample').after('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (content.length < 10){
                    $('#content').after('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
            });
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>