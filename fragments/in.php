<div class="container" style="background-color: white; padding: 20px; padding-bottom: 20px;">
  <?php
  session_start();
  $data = $db->getObject('SELECT * FROM users WHERE id = ' . $_SESSION['uid']);
  $html = '';
  foreach ($user->properties as $property) {
    if (!isset($property['hidden'])) {
      if (isset($property['isFile'])) {
        $html = $displays->{$property['type']}($property, $data) . $html;
      } else {
        $html = $html . $displays->{$property['type']}($property, $data);
      }
    }
  }
  echo $html;
  ?>
  <a href="?mode=out">
    <input type="button" class="btn-primary form-control" style="margin-top: 40px;" value="<?= $languages->buttons['exit'][$lang] ?>">
  </a>

</div>