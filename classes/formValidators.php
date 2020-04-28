<?php


class formValidators {
  function passwordsMatch($properties) {
    return '
    var fields = document.getElementsByClassName("' . $properties['fieldsClass'] . '");
    var index = 0;
    var firstField = "";
    Array.prototype.filter.call(fields, function(field) {
        index++;
        if (index == 1) {
          firstField = field.value;
        } else {
          if (field.value != firstField) {
            var badges = document.getElementsByClassName("' . $properties['badgesClass'] . '");
            Array.prototype.filter.call(badges, function(badge) {
                badge.style.display = "block";
            });
        
            event.preventDefault();
            event.stopPropagation();      
        }
      }
    });
    ';
  }
}