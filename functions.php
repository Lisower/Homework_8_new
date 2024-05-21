<?php
function showError($errors, $field) {
    return isset($errors[$field]) ? 'class="error"' : '';
}

function getValue($values, $field) {
    return isset($values[$field]) ? htmlspecialchars($values[$field]) : '';
}

function isChecked($values, $field, $value) {
    return isset($values[$field]) && $values[$field] == $value ? 'checked="checked"' : '';
}

function getLanguageOptions($values) {
    $languages = [
        1 => 'Pascal', 2 => 'C', 3 => 'C++', 4 => 'JavaScript', 5 => 'PHP',
        6 => 'Python', 7 => 'Java', 8 => 'Haskel', 9 => 'Clojure', 10 => 'Prolog', 11 => 'Scala'
    ];
    $options = '';
    foreach ($languages as $id => $name) {
        $selected = in_array($id, $values['favourite_languages'] ?? []) ? 'selected' : '';
        $options .= "<option value=\"$id\" $selected>$name</option>";
    }
    return $options;
}
?>
