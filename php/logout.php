<?php

echo '<script>';
echo 'var logoutConfirmed = confirm("Logout?");';
echo 'if (logoutConfirmed) {';
echo '    window.location.href = "../index.php";'; // Redirect if 'Yes' is clicked
echo '}';
echo '</script>';

//Destroy all session variables
session_destroy();

//Redirect Home
// header('Location: ../index.php');
