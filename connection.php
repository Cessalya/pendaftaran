<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'pendaftaran');
if(mysqli_connect_errno()){
    printf('Connection failed: '.mysqli_connect_error());
    exit();
}