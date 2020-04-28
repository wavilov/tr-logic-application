<?php
$fieldsSet = 0;
foreach ($user->authBy as $property) {
  if (isset($_POST[$property['type']])) {
    $fieldsSet++;
  }
}

if ($fieldsSet == count($user->authBy)) {
  $query = 'SELECT id FROM users WHERE ';
  foreach ($user->authBy as $property) {
    $query .= $property['type'] . ' = ';
    $query .= isset($property['modificator']) ? $property['modificator'] . '("' . $_POST[$property['type']] . '") AND ' : '"' . $_POST[$property['type']] . '" AND ';
  }
  $query = substr($query, 0, strlen($query) - 5);

  $me = $db->getObject($query);
  if ($me) {
    $_SESSION['uid'] = $me->id;
    header('Location: ?mode=in');
  } else {
    $displayError = true;
  }
}
?>