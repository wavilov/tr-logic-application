<?php
if (isset($_GET['action'])) {
  session_abort();
}
session_start();

require 'classes/user.php';
require 'classes/database.php';
require 'classes/formControls.php';
require 'classes/formValidators.php';
require 'classes/displays.php';
require 'classes/languages.php';

$db = new database();
$user = new user();
$formControls = new formControls();
$formValidators = new formValidators();
$displays = new displays();
$languages = new languages();

if (isset($_GET['lang'])) {
  setcookie('lang', $_GET['lang'], time() + 30*24*60*60);
  $_COOKIE['lang'] = $_GET['lang'];
}

$lang = (isset($_COOKIE['lang'])) ? $_COOKIE['lang'] : 'ru';
$mode = (isset($_GET['mode'])) ? $_GET['mode'] : 'registration';

if (file_exists('actions/' . $mode . '.php')) {
  require 'actions/' . $mode . '.php';
}

include 'fragments/header.php';

include 'fragments/navigation.php';

include 'fragments/' . $mode . '.php';

include 'fragments/footer.php';
?>