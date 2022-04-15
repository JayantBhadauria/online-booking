<?php $__env->startSection('head'); ?>
    <?php echo $__env->make('includes.head',['title'=>'Create new working hour'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

    <div class="form-group padding-space">
        <div class="container-fluid">
            <div class="row col-md-offset-3 col-md-6">
                <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="panel panel-default panel-custom">
                    <div class="panel-heading panel-custom-heading">
                        <h3 class="panel-title">Create new working hour</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="employee_id">Employee: <?php echo e(\App\Entities\Employee::find($workingHour->employees->id)->first_name.' '.\App\Entities\Employee::find($workingHour->employees->id)->last_name); ?></label>
                                            <input type="text" class="form-control custom-control" id="employee_id" value="<?php echo e(\App\Entities\Employee::find($workingHour->employees->id)->first_name.' '.\App\Entities\Employee::find($workingHour->employees->id)->last_name); ?>" name="employee_id" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="date">Date: </label>
                                            <input type="date" class="form-control custom-control" id="date" value="<?php echo e($workingHour->date); ?>" name="date" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="start_time">Start time: </label>
                                            <input type="time" class="form-control custom-control" id="start_time" value="<?php echo e($workingHour->start_time); ?>" name="start_time" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="finish_time">Finish time: </label>
                                            <input type="time" class="form-control custom-control" id="finish_time" value="<?php echo e($workingHour->finish_time); ?>" name="finish_time" readonly>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </div>
                        </form>
                    </div>
                </div>
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