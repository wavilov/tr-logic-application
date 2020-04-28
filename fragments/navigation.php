<?php
if ($mode == 'in') { ?>

<?php } else { ?>
  <ul class="nav nav-tabs" style="margin-top: 40px; position: relative;">
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'registration') ? 'active' : '';?>" href="?mode=registration">Регистрация</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'login') ? 'active' : '';?>" href="?mode=login">Вход</a>
    </li>
    <li class="nav-item" style="position: absolute; right: 0px;">
      <?php
      $index = 0;
      foreach ($constants->languages as $language) {
        $index++;
        ?>
        <img src="assets/<?= $language ?>.jpg" style="height: 15px; <?= ($index < count($constants->languages)) ? 'margin-right: 10px;' : '' ?>"/>
      <?php } ?>
    </li>
  </ul>
<?php } ?>