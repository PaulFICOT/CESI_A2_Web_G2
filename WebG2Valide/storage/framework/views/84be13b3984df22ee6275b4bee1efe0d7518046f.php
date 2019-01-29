<?php $__env->startSection('content'); ?>
    <form action="/connexion" method="post">
        <?php echo e(csrf_field()); ?>


    <p><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"></p>
    <?php if($errors->has('email')): ?>
        <p><?php echo e($errors->first('email')); ?></p>
    <?php endif; ?>
    <p><input type="password" name="password" placeholder="Mot de Passe"></p>  
    <?php if($errors->has('password')): ?>
        <p><?php echo e($errors->first('password')); ?></p>
    <?php endif; ?>
    <p><input type="submit" value="Se connecter"></p>   

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>