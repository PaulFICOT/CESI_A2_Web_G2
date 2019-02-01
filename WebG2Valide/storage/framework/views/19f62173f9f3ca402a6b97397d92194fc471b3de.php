<?php $__env->startSection('content'); ?>

</head>
<body>
    
    <h1>AJAX</h1>
    
    <div id="status">_ | _</div>
        <div id="events">

            <ul id="event">
            </ul>
        </div>
        
        <script src="js/events.js" ></script>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>