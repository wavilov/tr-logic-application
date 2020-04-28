<?php
if ($mode == 'in') { ?>

<?php } else { ?>
  <ul class="nav nav-tabs" style="margin-top: 40px; position: relative;">
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'registration') ? 'active' : '';?>" href="?mode=registration"><?= $languages->tabs['registration'][$lang] ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($mode == 'login') ? 'active' : '';?>" href="?mode=login"><?= $languages->tabs['login'][$lang] ?></a>
    </li>
    <li class="nav-item" style="position: absolute; right: 0;">
      <?php
      $index = 0;
      foreach ($languages->languages as $language) {
        $index++;
        ?>
        <a href="?lang=<?= $language ?>&mode=<?= $mode ?>">
          <img src="assets/<?= $language ?>.jpg" style="height: 15px; <?= ($index < count($languages->languages)) ? 'margin-right: 10px;' : '' ?>" alt="<?= $language ?>"/>
        </a>
      <?php } ?>
    </li>
  </ul>
<?php } ?>