<?php


class displays {

  function nickname($properties, $data) {
    return '
    <div class="row">
      <div class="col">' . $properties['display']['ru'] . '</div>
      <div class="col">' . $data->{$properties['type']} . '</div>
    </div>';
  }


  function city($properties, $data) {
    global $db;
    return '
    <div class="row">
      <div class="col">' . $properties['display']['ru'] . '</div>
      <div class="col">' . $db->getObject('SELECT name FROM users, cities WHERE cities.id = users.city AND users.id = ' . $data->id)->name . '</div>
    </div>';
  }

  function avatar() {
    return '
    <div class="row">
      <div class="col" style="text-align: center; padding-bottom: 20px;">
        <img src="/avatars/'. $_SESSION['uid'] . '.jpg" alt="avatar" style="width: 100px; 
        height: 100px; border-radius: 50%; vertical-align: middle;"/>
      </div>
    </div>';
  }
}