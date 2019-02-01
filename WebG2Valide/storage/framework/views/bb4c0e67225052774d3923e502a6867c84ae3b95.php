<?php $__env->startSection('content'); ?>

    <title>BDE - Inscription</title>
  </head>

  <body>
      <div class="containt">
          <div class="container">
              <div class="wrap">
                  <div class="toCenter">
                      <div class="pad shadow selected">
                          <form action="/inscription" method="post" if="contact-form" class="wide center" data-ajax-form="true">
                          <?php echo e(csrf_field()); ?>

                          <h3 id="ResponseContact-popUp" class="text-cesiBlue heavy-bottom">Inscription</h3>
                          <div class="label cropTop"><label class="cropTop text-cesiBlue" for="email">Email </label></div>
                          <p><input class="stroke wide" type="email" name="User_mail" placeholder="Email" value="<?php echo e(old('email')); ?>"></p> 
                          <?php if($errors->has('User_mail')): ?>
                          <p><?php echo e($errors->first('User_mail')); ?></p>
                          <?php endif; ?>
                          <div class="label cropTop"><label class="cropTop text-cesiBlue" for="FirstName">Prénom</label></div>
                          <p><input class="stroke wide" type="text" name="FirstName" placeholder="Prénom" value="<?php echo e(old('FirstName')); ?>"></p>
                          <?php if($errors->has('FirstName')): ?>
                          <p><?php echo e($errors->first('FirstName')); ?></p>
                          <?php endif; ?>
                          <div class="label cropTop"><label class="cropTop text-cesiBlue" for="LastName">Nom</label></div>
                          <p><input class="stroke wide" type="text" name="LastName" placeholder="Nom de famille" value="<?php echo e(old('LastName')); ?>"></p>
                          <?php if($errors->has('LastName')): ?>
                          <p><?php echo e($errors->first('LastName')); ?></p>
                          <?php endif; ?>
                          <div class="label "><label class="text-cesiBlue" for="password">Mot de passe</label></div>
                          <p><input class="stroke wide" type="password" name="password" placeholder="Mot de Passe"></p>  
                          <?php if($errors->has('password')): ?>
                          <p><?php echo e($errors->first('password')); ?></p>
                          <?php endif; ?>
                          <div class="label "><label class="text-cesiBlue" for="password_confirmation">Mot de passe (Confirmation)</label></div>
                          <p><input class="stroke wide" type="password" name="password_confirmation" placeholder="Confirmation"></p>   
                          <?php if($errors->has('password_confirmation')): ?>
                          <p><?php echo e($errors->first('password_confirmation')); ?></p>
                          <?php endif; ?>
                          <div class="label "><label class="text-cesiBlue" for="Location">Centre</label></div>
                          <select name="Location" size="1">
                              <option name="Location" value="1">Aix-en-Provence</option>
                                <option name="Location" value="2">Alger</option>
                                <option name="Location" value="3">Angoulème</option>
                                <option name="Location" selected value="4"> Arras</option>
                                <option name="Location" value="5">Bordeaux</option>
                                <option name="Location" value="6">Brest</option>
                                <option name="Location" value="7">Caen</option>
                                <option name="Location" value="8">Châteauroux</option>
                                <option name="Location" value="9">Dijon</option>
                                <option name="Location" value="10">Grenoble</option>
                                <option name="Location" value="11">La Rochelle</option>
                                <option name="Location" value="12">Le Mans</option>
                                <option name="Location" value="13">Lille</option>
                                <option name="Location" value="14">Lyon</option>
                                <option name="Location" value="15">Montpellier</option>
                                <option name="Location" value="16">Nancy</option>
                                <option name="Location" value="17">Nantes</option>
                                <option name="Location" value="18">Nice</option>
                                <option name="Location" value="19">Orléans</option>
                                <option name="Location" value="20">Paris Nanterre</option>
                                <option name="Location" value="21"> Pau</option>
                                <option name="Location" value="22">Reims</option>
                                <option name="Location" value="23">Rouen</option>
                                <option name="Location" value="24">Saint-Nazaire</option>
                                <option name="Location" value="25">Strasbourg</option>
                                <option name="Location" value="26">Toulouse</option>
                            </select>
                            <p><input type="checkbox" required id="checkcgu" for="checkcgu">
                            J'accepte les <a href"http://127.0.0.1:8000/cgu">Conditions Générales d'Utilisation</a>
                            </p>
                            <div>
                                
                            <input class="button cesiBlue round btn margin-top-2 cropBottom" type="submit" value="M'inscrire">  
                            <p>Vous possèdez déjà un compte ?</p>
                            <a class ="button cesiBlue round btn margin-top-2 cropBottom" href="http://127.0.0.1:8000/connexion">Se connecter</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>