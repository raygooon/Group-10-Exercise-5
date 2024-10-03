<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    
    $errors = [];

    if (empty($username)) {
        $errors[] = 'Username is required.';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    if ($username === 'existingUser') {
        $errors[] = 'Username is already taken.';
    }

    if (!empty($errors)) {
        echo implode('<br>', $errors);
    } else {
        echo 'Registration successful!';
    }
}
?>