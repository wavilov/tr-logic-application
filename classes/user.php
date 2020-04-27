<?php


class user {
  var $name = [];
  var $password = [];
  var $origin = [];
  var $avatar = [];
  var $properties = [];

  function __construct() {
    $this->name['type'] = 'string';
    $this->name['description']['ru'] = 'Как вас зовут?';
    $this->name['placeholder']['ru'] = 'Иван Петров';

    $this->password['type'] = 'password';
    $this->password['description']['ru'] = 'Придумайте пароль';

    $this->origin['type'] = 'city';
    $this->origin['description']['ru'] = 'Откуда вы?';

    $this->avatar['type'] = 'img';
    $this->avatar['description']['ru'] = 'Загрузите фото';

    $this->properties = [$this->name, $this->password, $this->origin, $this->avatar];
  }
}