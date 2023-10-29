<?php
//Destroy all session variables
session_destroy();

//Redirect Home
header("Location: ../index.html");
