<?php
$controller = isset($_GET['controller'])? $_GET['controller'] : 'main';

echo $controller;

require_once(ROOT. DS . "controller/{$controller}.php");
