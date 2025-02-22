<?php

session_start();
include_once('connect.php');



if ($_SESSION > 0) {
    session_destroy();
    header('location: login.php');
}
