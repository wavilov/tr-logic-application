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
    $this->name['registration']['en'] = 'Type new nickname';
    $this->name['auth']['ru'] = 'Введите ваш псевдоним';
    $this->name['auth']['en'] = 'Enter your nickname';
    $this->name['display']['ru'] = 'Псевдоним';
    $this->name['display']['en'] = 'Nickname';
    $this->name['error']['registration']['ru'] = 'псевдоним уже занят';
    $this->name['error']['registration']['en'] = 'nickname already in use';
    $this->name['error']['auth']['ru'] = 'в доступе отказано';
    $this->name['error']['auth']['en'] = 'access denied';

    $this->password['type'] = 'password';
    $this->password['jsValidation'] = 'passwordsMatch';
    $this->password['phpValidation'] = function() {
      return $_POST['password'] == $_POST['password2'];
    };
    $this->password['fieldsClass'] = 'password';
    $this->password['badgesClass'] = 'passwordError';
    $this->password['registration']['ru'] = 'Придумайте пароль';
    $this->password['registration']['en'] = 'Type new password';
    $this->password['auth']['ru'] = 'Введите ваш пароль';
    $this->password['auth']['en'] = 'Enter your password';
    $this->password['hidden'] = true;
    $this->password['error']['registration']['ru'] = 'пароли не совпадают';
    $this->password['error']['registration']['en'] = 'passwords do not match';
    $this->password['error']['auth']['ru'] = 'в доступе отказано';
    $this->password['error']['auth']['en'] = 'access denied';

    $this->origin['type'] = 'city';
    $this->origin['registration']['ru'] = 'Откуда вы?';
    $this->origin['registration']['en'] = 'Where are you from?';
    $this->origin['display']['ru'] = 'Город';
    $this->origin['display']['en'] = 'City';

    $this->avatar['type'] = 'avatar';
    $this->avatar['registration']['ru'] = 'Загрузите фото';
    $this->avatar['registration']['en'] = 'Upload your photo';
    $this->avatar['isFile'] = true;

    $this->properties = [$this->name, $this->password, $this->origin, $this->avatar];
    $this->authBy = [$this->name, $this->password];
  }
}