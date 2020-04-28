<form style="padding-top: 30px; padding-bottom: 30px;" method="post" id="form">

  <?php
  foreach ($user->authBy as $property) {
    echo $formControls->{$property['type']}($property, 'auth');
  }
  ?>

  <input type="submit" class="btn-primary form-control" style="margin-top: 40px;" value="<?= $languages->buttons['login'][$lang] ?>">

</form>