<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header('Location: ../app/views/dashboard.php');
    exit;
}

require_once '../app/auth/login.php';
