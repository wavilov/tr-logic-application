<?php


class user {
  var $name = [];
  var $password = [];
  var $origin = [];
  var $avatar = [];
  var $properties = [];
  var $authBy = [];
  var $table = 'users';

  function __construct() {
    $this->name['type'] = 'nickname';
    $this->name['registration']['ru'] = 'Придумайте псевдоним';
    $this->name['auth']['ru'] = 'Введите ваш псевдоним';
    $this->name['display']['ru'] = 'Псевдоним';
    $this->name['error']['registration']['ru'] = 'псевдоним уже занят';
    $this->name['error']['auth']['ru'] = 'в доступе отказано';

    $this->password['type'] = 'password';
    $this->password['jsValidation'] = 'passwordsMatch';
    $this->password['phpValidation'] = function() {
      return $_POST['password'] == $_POST['password2'];
    };
    $this->password['fieldsClass'] = 'password';
    $this->password['badgesClass'] = 'passwordError';
    $this->password['registration']['ru'] = 'Придумайте пароль';
    $this->password['auth']['ru'] = 'Введите ваш пароль';
    $this->password['hidden'] = true;
    $this->password['error']['registration']['ru'] = 'пароли не совпадают';
    $this->password['error']['auth']['ru'] = 'в доступе отказано';

    $this->origin['type'] = 'city';
    $this->origin['registration']['ru'] = 'Откуда вы?';
    $this->origin['display']['ru'] = 'Город';

    $this->avatar['type'] = 'avatar';
    $this->avatar['registration']['ru'] = 'Загрузите фото';
    $this->avatar['isFile'] = true;

    $this->properties = [$this->name, $this->password, $this->origin, $this->avatar];
    $this->authBy = [$this->name, $this->password];
  }
}