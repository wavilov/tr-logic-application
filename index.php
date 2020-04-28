<?php
require 'classes/user.php';
require 'classes/database.php';
require 'classes/formControls.php';
require 'classes/formValidators.php';
require 'classes/displays.php';

$db = new database();
$user = new user();
$formControls = new formControls();
$formValidators = new formValidators();
$displays = new displays();


include 'fragments/header.php';

$mode = (isset($_GET['mode'])) ? $_GET['mode'] : 'registration';

include 'fragments/navigation.php';

include 'fragments/' . $mode . '.php';

include 'fragments/footer.php';
?>