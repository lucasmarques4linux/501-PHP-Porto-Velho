<?php 

$db = new PDO("pgsql:host=localhost;dbname=aula","lucas","123");

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
