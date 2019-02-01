<?php $__env->startSection('content'); ?>
</head>
<body>
    <div class="section">
        <h1 class="title is-l">Mon compte</h1>

        <p>Vous êtes bien connecté(e).</p>

        <p><a href="/deconnexion" class ="button cesiBlue round btn margin-top-2 cropBottom">Déconnexion</a></p>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>