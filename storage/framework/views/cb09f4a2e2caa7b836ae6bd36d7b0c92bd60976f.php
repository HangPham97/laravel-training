<?php if(!empty($news->category)): ?>
    <?php $__currentLoopData = $news->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="btn btn-block btn-info btn-sm btn-cate"><?php echo e($cate->name); ?></button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>