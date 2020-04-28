<?php


class formControls {

  function nickname($properties, $mode) {
    global $displayError;
    $html = '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $properties[$mode]['ru'] . '</label>';
      $html .= (isset($displayError)) ? '<span style="float: right; color: darkred; display: ;">псевдоним уже занят</span>' : '';
      $defaultValue = (isset($displayError)) ? $_POST['nickname'] : '';
      $html .= '<input type="text" class="form-control" value="' . $defaultValue . '" name="' . $properties['type'] . '" required/>
    </div>';
    return $html;
  }

  function password($properties, $mode) {
    if ($mode == 'registration') {
      return '
      <div class="form-group">
        <label for="exampleInputEmail1">' . $properties[$mode]['ru'] . '</label>
        <span style="float: right; color: darkred; display: none;" class="' . $properties['badgesClass'] . '">пароли не совпадают</span>
        <input type="password" class="form-control ' . $properties['fieldsClass'] . '" name="' . $properties['type'] . '" required/>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Повторите пароль</label>
        <span style="float: right; color: darkred; display: none;" class="' . $properties['badgesClass'] . '">пароли не совпадают</span>
        <input type="password" class="form-control ' . $properties['fieldsClass'] . '" name="' . $properties['type'] . '2" required/>
        <div class="pwstrength_viewport_progress" style="height: 5px;"></div>
      </div>';
    } else {
      return '
      <div class="form-group">
        <label for="exampleInputEmail1">' . $properties['auth']['ru'] . '</label>
        <span style="float: right; color: darkred; display: none;" class="' . $properties['badgesClass'] . '">пароли не совпадают</span>
        <input type="password" class="form-control ' . $properties['fieldsClass'] . '" name="' . $properties['type'] . '" required/>
      </div>';
    }
  }

  function city($properties, $mode) {
    global $db;
    $html = '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $properties[$mode]['ru'] . '</label>
      <select class="custom-select" name="' . $properties['type'] . '" required>';
        $cities = $db->getObjects('SELECT * FROM cities');
        foreach ($cities as $city) {
          $html .= '<option value="' . $city->id . '">' . $city->name . '</option>';
        }
      $html .= '</select>
    </div>';

    return $html;
  }

  function avatar($properties, $mode) {
    return '
    <div class="custom-file" style="margin-top: 20px;">
      <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg,.png"  name="' . $properties['type'] . '" required>
      <label class="custom-file-label" for="validatedCustomFile">' . $properties[$mode]['ru'] . '</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>';
  }
}