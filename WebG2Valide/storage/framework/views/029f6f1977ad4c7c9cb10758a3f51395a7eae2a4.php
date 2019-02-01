<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/site.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
      <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>

    <div class="links">

    <footer class="cesiBlue">
      <div class="grid center">
        <div class="col-4-12 toCenter"><a href="http://127.0.0.1:8000/mentions" target="_blank"><p class="tiny">Mentions Légales</p></a></div>
        <div class="col-4-12 toCenter"><a href="mailto:paul.ficot@viacesi.fr"><p class="tiny">Contactez-nous</p></a></div>
        <div class="col-4-12 toCenter"><a href="http://127.0.0.1:8000/cgv" target="_blank"><p class="tiny">Conditions générales de vente</p></a></div>
      </div>
    </footer>
  </div>
</body>
</html>
