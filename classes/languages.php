<?php


class languages
{
  var $languages = ['ru', 'en'];
  var $header = [];
  var $tabs = [];
  var $buttons = [];

  function __construct()
  {
    $this->header['en'] = 'account';
    $this->header['ru'] = 'кабинет';

    $this->tabs['registration']['ru'] = 'Регистрация';
    $this->tabs['registration']['en'] = 'Sign up';
    $this->tabs['login']['ru'] = 'Вход';
    $this->tabs['login']['en'] = 'Sign in';

    $this->buttons['registration']['ru'] = 'Зарегистрироваться';
    $this->buttons['registration']['en'] = 'Confirm';
    $this->buttons['login']['ru'] = 'Войти';
    $this->buttons['login']['en'] = 'Confirm';
    $this->buttons['exit']['ru'] = 'Выход';
    $this->buttons['exit']['en'] = 'Exit';
  }
}
?>