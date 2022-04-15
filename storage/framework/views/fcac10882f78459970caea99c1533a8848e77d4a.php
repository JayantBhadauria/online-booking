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
                        <h3 class="panel-title">Client: <?php echo e(\App\Entities\User::find($appointment->user_id)->first_name.' '. \App\Entities\User::find($appointment->user_id)->last_name); ?></h3>
                    </div>
                    <div class="panel-body">
                        <form action="">
                            <?php echo e(csrf_field()); ?>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="user_id">User: </label>
                                            <input type="text" class="form-control custom-control" id="user_id" value="<?php echo e(\App\Entities\User::find($appointment->user_id)->first_name.' '. \App\Entities\User::find($appointment->user_id)->last_name); ?>" name="user_id" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="service_id">Service: </label>
                                            <input type="text" class="form-control custom-control" id="comments" value="<?php echo e(\App\Entities\Service::find($appointment->service_id)->name); ?>" name="comments" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="date">Date: </label>
                                            <input type="date" class="form-control custom-control" id="date" value="<?php echo e($appointment->date); ?>" name="date" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="employee_id">Employee: </label>
                                            <input type="text" class="form-control custom-control" id="employee_id"
                                                   value="<?php echo e($appointment->employee->first()->first_name.' '. $appointment->employee->first()->last_name. ' ('.date('g:iA',strtotime($appointment->employee->first()->workingHour->first()->start_time)).'-'.date('g:iA',strtotime($appointment->employee->first()->workingHour->first()->finish_time)).')'); ?>" name="date" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="start_time">Start time: </label>
                                            <input type="time" class="form-control custom-control" id="start_time" value="<?php echo e($appointment->start_time); ?>" name="start_time" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="finish_time">Finish time: </label>
                                            <input type="time" class="form-control custom-control" id="finish_time" value="<?php echo e($appointment->finish_time); ?>" name="finish_time" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Comment: </label>
                                            <textarea class="form-control custom-control" style="resize: none" id="comments" value="<?php echo e($appointment->comments); ?>" name="comments" maxlength="150" readonly><?php echo e($appointment->comments); ?></textarea>
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