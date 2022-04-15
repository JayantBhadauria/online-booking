<!DOCTYPE html>
<html lang="en" class="fullscreen">
<head>
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body class="page dashboard-page fullscreen relative">
<main class="dashboard-content relative">
<?php echo $__env->make('includes.sidebar-and-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /content -->
<?php echo $__env->yieldContent('content'); ?>
    <!-- content -->
</main>
<!-- /scripts -->
<?php echo $__env->yieldContent('scripts'); ?>
<!-- /scripts -->
</body>
</html>