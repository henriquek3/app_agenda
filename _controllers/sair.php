<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 07/11/2016
 * Time: 11:44
 */

session_start();
session_destroy();

header("location:/index.html");