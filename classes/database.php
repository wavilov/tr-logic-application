<?php


class database {
  var $db;

  function __construct() {
    $this->db = mysqli_connect('localhost', 'root', '1111', 'tr-logic');
    mysqli_query($this->db, 'SET CHARSET utf8mb4');
  }

  function exec($sql) {
    return mysqli_query($this->db, $sql);
  }

  function getError() {
    return mysqli_error($this->db);
  }

  function insertId() {
    return mysqli_insert_id($this->db);
  }

  function getObject($sql) {
    $result = $this->getObjects($sql);
    if ($result) {
      if (count($result) > 0) {
        return $result[0];
      }
    }
    return false;
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