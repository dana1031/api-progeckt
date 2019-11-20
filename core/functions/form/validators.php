<?php

function validate_number_range($field_input, &$field, $params) {
    if ($field_input < $params['min'] || $field_input > $params['max']) {
        $field['error'] = 'netinkamas amzius!';
        return false;
    }
    return true;
}

//function validate_to_mach_simbol($field_value, &$Form, $params) {
//    var_dump($field_value);
//    if (strlen($field_value)<8) {
//        $feld['error'] = 'neteisingai ivestas passwordas';
//        return false;
//    }  
//    return true;
//}





function validate_fields_match($filtered_input, &$form, $params) {
    $match = true;

    foreach ($params as $field_id) {
        var_dump($params);
        $ref_value = $ref_value ?? $filtered_input[$field_id];
        if ($ref_value != $filtered_input[$field_id]) {
            $match = false;
            break;
        }
    }

    if (!$match) {
        $form['fields'][$field_id]['error'] = 'Laukai nesutampa!';
        return false;
    }

    return true;
}

function validate_not_empty($field_value, &$field) {
    if (strlen($field_value) == 0) {
        $field['error'] = 'Laukas negali būti tuščias';
    } else {
        return true;
    }
}

function validate_is_number($field_value, &$field) {
    if (!is_numeric($field_value)) {
        $field['error'] = 'Įveskite skaičių!';
    } else {
        return true;
    }
}

function validate_is_positive($field_value, &$field) {
    if ($field_value < 0) {
        $field['error'] = 'Įveskite teigiamą skaičių.';
    } else {
        return true;
    }
}

//function validate_age($field_value, &$field) {
//   if (($field_value <19) || ($field_value > 110)) {
//       $field['error'] = 'netinkamas amzius!';
//        return false;
//   }
//    
//    return true;
//}


function validate_alphabet_only($field_value, &$field) {
    $regex = '/[^a-zA-Z]/';
    if (preg_match($regex, $field_value) == 1) {
        $field['error'] = 'Iveskite tik raides';
        return false;
    }
    return true;
}
