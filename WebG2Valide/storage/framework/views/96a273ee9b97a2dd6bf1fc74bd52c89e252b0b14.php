<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script href="public/js/script.js"></script>
    <script href="public/js/jquery.js" ></script>
    <title>BDE - Connexion</title>
  </head>

  <body>
      <div class="containt">
          <div class="container">
              <div class="wrap">
                  <div class="toCenter">
                      <div class="pad shadow selected">
                          <form action="/connexion" id="contact-form" method="post"  class="wide center" data-ajax-form="true">
                          <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Connexion</h3>
                          <div class="label ">
                              <?php echo e(csrf_field()); ?>


                              <label class="text-cesiBlue" for="User_mail">Adresse Email</label>
                            </div>
                            <p><input type="email" name="User_mail" placeholder="Email" value="<?php echo e(old('User_mail')); ?>"></p>
                            <?php if($errors->has('User_mail')): ?>
                            <p><?php echo e($errors->first('User_mail')); ?></p>
                            <?php endif; ?>

                            <div class="label">
                                <label class="text-cesiBlue" for="password">Mot De Passe</label>
                            </div>
                            <p><input type="password" name="password" placeholder="Mot de Passe"></p>
                            <?php if($errors->has('password')): ?>
                            <p><?php echo e($errors->first('password')); ?></p>
                            <?php endif; ?>
                            <p><input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" value="Se connecter"></p>
                            <p>
                                <p>Vous ne possédez pas de compte ?</p>
                                <a class ="button cesiBlue round btn margin-top-2 cropBottom" href="http://127.0.0.1:8000/inscription">S'inscrire</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>