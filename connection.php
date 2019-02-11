<?php

$connection = mysqli_connect('localhost', 'root', '', 'expomedics');

if(!$connection){
	die(mysqli_connect_error());
}