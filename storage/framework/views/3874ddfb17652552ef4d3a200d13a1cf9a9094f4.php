<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-md-12">
            <div class="col-md-9">
                <canvas id="myChart" style="display: initial !important;"></canvas>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script>
        var data = '<?php echo e($data); ?>';
        var ctx = document.getElementById("myChart").getContext('2d');
        console.log(JSON.parse(data));
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Dec', 'Oct', 'Dec'],
                datasets: [{
                    label: 'Posts',
                    data: JSON.parse(data),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 82, 205, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',

                        'rgba(183, 100, 255, 0.2)',
                        'rgba(153, 102, 125, 0.2)',
                        'rgba(53, 192, 192, 0.2)',
                        'rgba(100, 102, 255, 0.2)',
                        'rgba(253, 102, 100, 0.2)',
                        'rgba(53, 159, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 159, 64, 1)',

                        'rgba(183, 100, 255, 1)',
                        'rgba(153, 102, 125, 1)',
                        'rgba(53, 192, 192, 1)',
                        'rgba(100, 102, 255, 1)',
                        'rgba(253, 102, 100, 1)',
                        'rgba(53, 159, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 1,
                            stepSize: Math.ceil(1),
                            max: 10
                        }
                    }],
                    xAxes: [{
                        barThickness: 33
                    }]
                },
                legend: {
                    // position: 'right'
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>