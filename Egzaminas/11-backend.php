<?php
session_start();
if (!isset($_SESSION['imone'])) $_SESSION['imone'] = [];
$_SESSION['imone'][] = $_POST;
header('location: 11-frontend.html');