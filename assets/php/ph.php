<?php
$errors = [];
$fields = ['name', 'company name', 'email', 'phone', 'messege'];
$optionalFields = ['messege'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }