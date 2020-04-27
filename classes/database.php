<?php


class database {
  var $db;

  function __construct() {
    $this->db = mysqli_connect('localhost', 'root', '111');
  }

  function getObjects($sql) {
    $objects = mysqli_query($this->db, $sql);
    if ($objects) {
      $result = array();
      while ($object = mysqli_fetch_object($objects)) {
        $result[] = $object;
      }
      return $result;
    }
    return false;
  }
}