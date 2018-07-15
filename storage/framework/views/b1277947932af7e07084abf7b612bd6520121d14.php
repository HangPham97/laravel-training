<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="alert"> <p style="color:red;">
                    <?php echo e(Session('success')); ?>

                </p>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                            <div class="add_button"><button type="button" class="btn btn-block btn-info btn-flat"><a href="<?php echo e(route('news.create')); ?>">Add</a></button></div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr class="td_padding">
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">TITLE</th>
                                    <th class="col-md-2">SAMPLE</th>
                                    <th class="col-md-4">CONTENT</th>
                                    <th class="col-md-1">CATEGORY</th>
                                    <th class="col-md-1">EDIT</th>
                                    <th class="col-md-1">DELETE</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $each_news->news_id?></td>
                                        <td><?php echo $each_news->title?></td>
                                        <td><?php echo $each_news->sample?></td>
                                        <td><?php echo $each_news->content?></td>
                                        <td>
                                            <?php $__currentLoopData = \Modules\TestModule\Entities\NewsCate::getCateName($each_news->news_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <label><?php echo e($categories->name); ?></label>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-app edit-custom"  href="<?php echo e(route('edit',$each_news->news_id)); ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-del"><a href="<?php echo e(route('delete',$each_news->news_id)); ?>"> delete</a> </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>