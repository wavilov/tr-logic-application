<?php


class formControls {

  function string($description) {
    return '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $description . '</label>
      <input type="text" class="form-control" required/>
    </div>';
  }

  function password($description) {
    return '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $description . '</label>
      <input type="password" class="form-control" required/>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Повторите пароль</label>
      <input type="password" class="form-control" required/>
      <div class="pwstrength_viewport_progress" style="height: 5px;"></div>
    </div>';
  }

  function city($description) {
    return '
    <div class="form-group">
      <label for="exampleInputEmail1">' . $description . '</label>
      <select class="custom-select" required>
        <option value="moscow">Москва</option>
        <option value="spb">Санкт-Петербург</option>
        <option value="kazan">Казань</option>
        <option value="ekb">Екатеринбург</option>
      </select>
    </div>';
  }

  function img($description) {
    return '<div class="custom-file" style="margin-top: 20px;">
      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
      <label class="custom-file-label" for="validatedCustomFile">' . $description . '</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>';
  }
}