<?php $__env->startSection('sidebar-wrapper'); ?>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
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
            <li class="table-list">
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
<?php $__env->startSection('chart'); ?>

    <!-- End Navbar -->
    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">2018 Views</h5>
                    <h4 class="card-title">Total Views</h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExample"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">2018 Sales</h5>
                    <h4 class="card-title">All products</h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Email Statistics</h5>
                    <h4 class="card-title">24 Hours Performance</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="card-category">Posts</h5>
                <h4 class="card-title"> Latest Posts</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th class="th-align">
                                    Image
                                </th>
                                <th class="th-align">
                                    Content
                                </th>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->index < 3): ?>
                                        <tr>
                                            <td class="news-image">
                                                <img width="500px" height="80px" src="<?php echo e(\Modules\TestModule\Entities\news::getDataUrl($each_news->image)); ?>" alt="">
                                            </td>
                                            <td>
                                                <p class="news-title"><?php echo e($each_news->title); ?></p>
                                                <p class="sample-text" ><?php echo(substr($each_news->sample,0,150).'...'); ?></p>
                                            </td>
                                        </tr>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th class="th-align">
                                        Image
                                    </th>
                                    <th class="th-align">
                                        Content
                                    </th>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if( $loop->index >1 && $loop->index < 5): ?>
                                        <tr>
                                            <td class="news-image">
                                                <img width="500px" height="80px" src="<?php echo e(\Modules\TestModule\Entities\news::getDataUrl($each_news->image)); ?>" alt="">
                                            </td>
                                            <td>
                                                <p class="news-title"><?php echo e($each_news->title); ?></p>
                                                <p class="sample-text" >
                                                    <?php echo(substr($each_news->sample,0,150).'...'); ?>
                                                </p>
                                                
                                            </td>
                                        </tr>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>

        var data = '<?php echo e($data); ?>';
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterDashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>