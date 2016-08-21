<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
    <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="fa fa-book"></i>&nbsp; To Do App</a>
    </div>
</div>

<!-- main body of our app -->
<div class="container" id="events">
    <!-- add an events -->
    <?php echo $__env->yieldContent('addevent'); ?>

    <!-- lists all events Todo Lists -->
    <?php echo $__env->yieldContent('listevent'); ?>
</div>
</body>
<?php echo $__env->make('layouts.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>