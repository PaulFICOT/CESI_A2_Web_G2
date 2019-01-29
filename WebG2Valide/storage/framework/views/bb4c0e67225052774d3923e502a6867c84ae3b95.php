<?php $__env->startSection('content'); ?>
    <form action="/inscription" method="post">
        <?php echo e(csrf_field()); ?>


    <p><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"></p>
    
    <?php if($errors->has('email')): ?>
        <p><?php echo e($errors->first('email')); ?></p>
    <?php endif; ?>
    <p><input type="text" name="FirstName" placeholder="Prénom" value="<?php echo e(old('FirstName')); ?>"></p>
    <?php if($errors->has('FirstName')): ?>
        <p><?php echo e($errors->first('FirstName')); ?></p>
    <?php endif; ?>
    <p><input type="text" name="LastName" placeholder="Nom de famille" value="<?php echo e(old('LastName')); ?>"></p>
    <?php if($errors->has('LastName')): ?>
        <p><?php echo e($errors->first('LastName')); ?></p>
    <?php endif; ?>
    <p><input type="password" name="password" placeholder="Mot de Passe"></p>  
    <?php if($errors->has('password')): ?>
        <p><?php echo e($errors->first('password')); ?></p>
    <?php endif; ?>
    <p><input type="password" name="password_confirmation" placeholder="Confirmation"></p>   
    <?php if($errors->has('password_confirmation')): ?>
        <p><?php echo e($errors->first('password_confirmation')); ?></p>
    <?php endif; ?>
    <p><input type="submit" value="M'inscrire"></p>   

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>