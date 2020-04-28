<form style="padding-top: 30px; padding-bottom: 30px;" method="post" id="form">

  <?php
  foreach ($user->authBy as $property) {
    echo $formControls->{$property['type']}($property, 'auth');
  }
  ?>
  <input type="submit" class="btn-primary form-control" style="margin-top: 40px;" value="Зарегистрироваться">
</form>

<script>
    var form = document.getElementById('form');
    form.addEventListener('submit', function(event) {
      <?php
      foreach ($user->properties as $property) {
        if (isset ($property['jsValidation'])) {
          echo $formValidators->{$property['jsValidation']}($property);
        }
      }
      ?>
    });
</script>