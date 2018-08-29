<?php 

$db = new PDO("mysql:host=localhost;dbname=aula","lucas","@da4linux");

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);