<?php

require_once '../controller/employeC.php';
require_once '../model/employer.php';
$employee =new employer();
$employe1 = new employeC();
$employe1->show($employee);
var_dump($employee);
?>