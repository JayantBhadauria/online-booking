<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=>'Employees'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/base.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php $__env->stopSection(); ?>
<!-- monitor -->
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(\Illuminate\Support\Facades\URL::previous()); ?>"><h4>◀ Back</h4></a>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-sm-12 col-mobile">
        <div class="board-box">
            <div class="board-title">
                <h2>List of all services <a href="<?php echo e(route('services.create')); ?>" class="add-new-employee"><span
                                style="float: right;padding-right: 20px;" class="fa fa-plus"></span></a></h2>
            </div>

            <div class="table-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th class="custom-column"></th>
                            <th class="custom-column"></th>
                            <th class="custom-column"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($service->id); ?></th>
                                <td><?php echo e($service->name); ?></td>
                                <td><?php echo e($service->price); ?></td>
                                <td>
                                    <button class="btn btn-default btn-lg"
                                            onclick='window.location.href="<?php echo e(route('services.show',$service->id)); ?>"'>
                                        <span class="glyphicon glyphicon-eye-open"></span></button>

                                <td>
                                    <button class="btn btn-default btn-lg"
                                            onclick='window.location.href="<?php echo e(route('services.edit',$service->id)); ?>"'>
                                        <span class="glyphicon glyphicon-edit"></span></button>
                                </td>
                                <?php echo Form::open(['method' => 'DELETE','route' => ['services.destroy', $service->id]]); ?>

                                <td>
                                    <button type="submit" class="btn btn-default btn-lg">
                                        <span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                                <?php echo Form::close(); ?>


                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation" class="my-pagination">
                    <?php echo str_replace('/?', '?', $services->render()); ?>

                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Moment -->
    <script src="/js/moment.min.js"></script>
    <!-- Bootstrap Datepicker -->
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>