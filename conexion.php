<?php

$con= new mysqli("localhost","root","","CrearDev");
if ($con->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $con->connect_error);
}