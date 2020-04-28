<?php


class formControls {

  function nickname($properties, $mode) {
    global $lang, $displayError;
    $html = '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $properties[$mode][$lang] . '</label>';
      $html .= (isset($displayError)) ? '<span style="float: right; color: darkred; display: ;">' . $properties['error'][$mode][$lang] . '</span>' : '';
      $defaultValue = (isset($displayError)) ? $_POST['nickname'] : '';
      $html .= '<input type="text" class="form-control" value="' . $defaultValue . '" name="' . $properties['type'] . '" required/>
    </div>';
    return $html;
  }

  function password($properties, $mode) {
    global $lang, $displayError;

    if ($mode == 'registration') {
      $html =  '
      <div class="form-group">
        <label for="exampleInputEmail1">' . $properties[$mode][$lang] . '</label>
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
      $html = '
      <div class="form-group">
        <label for="exampleInputEmail1">' . $properties['auth'][$lang] . '</label>';
      $html .= isset($displayError) ? '<span style="float: right; color: darkred;" class="' . $properties['badgesClass'] . '">' . $properties['error'][$mode][$lang] . '</span>' : '';
      $html .= '<input type="password" class="form-control ' . $properties['fieldsClass'] . '" name="' . $properties['type'] . '" required/>
      </div>';
    }

    return $html;
  }

  function city($properties, $mode) {
    global $lang, $db;
    $html = '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $properties[$mode][$lang] . '</label>
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
    global $lang;
    return '
    <div class="custom-file" style="margin-top: 20px;">
      <input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg,.png"  name="' . $properties['type'] . '" required>
      <label class="custom-file-label" for="validatedCustomFile">' . $properties[$mode][$lang] . '</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>';
  }
}