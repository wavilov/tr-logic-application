<?php
if ($mode == 'in') { ?>

<?php } else { ?>
  <ul class="nav nav-tabs" style="margin-top: 40px;">
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'registration') ? 'active' : '';?>" href="?mode=registration">Регистрация</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'login') ? 'active' : '';?>" href="?mode=login">Вход</a>
    </li>
  </ul>
<?php } ?>