<?php
$fieldsSet = 0;
foreach ($user->properties as $property) {
  if (isset($property['isFile'])) {
    if (isset($_FILES[$property['type']])) {
      $fieldsSet++;
    }
  } else {
    if (isset($_POST[$property['type']])) {
      $fieldsSet++;
    }
  }
}

if ($fieldsSet == count($user->properties)) {
  foreach ($user->properties as $property) {
    if (isset($property['phpValidation'])) {
      if (!$property['phpValidation']) {
        exit;
      }
    }
  }

  $query = 'INSERT INTO ' . $user->table . '(';
  foreach ($user->properties as $property) {
    if (!isset($property['isFile'])) {
      $query .= $property['type'] . ', ';
    }
  }
  $query = substr($query, 0, strlen($query) - 2) . ') VALUES (';
  foreach ($user->properties as $property) {
    if (!isset($property['isFile'])) {
      $query .= (isset($property['modificator'])) ? $property['modificator'] . '("' . $db->escape($_POST[$property['type']]) . '"), ' : '"' . $db->escape($_POST[$property['type']]) . '", ';
    }
  }
  $query = substr($query, 0, strlen($query) - 3) . '")';
  $db->exec($query);
  if ($db->getError() != '') {
    $displayError = true;
  } else {
    $target_dir = "avatars/";
    foreach ($user->properties as $property) {
      if (isset($property['isFile'])) {
        $target_file = $target_dir . basename($_FILES[$property['type']]['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
          && $imageFileType == "gif") {
            $target_file = $target_dir . $db->insertId() . '.' . $imageFileType;
            move_uploaded_file($_FILES[$property['type']]["tmp_name"], $target_file);
            $_SESSION['uid'] = $db->insertId();
            header('Location: /?mode=in');
        }
      }
    }
  }
}
?>