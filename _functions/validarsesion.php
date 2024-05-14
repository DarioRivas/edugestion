<?php 
session_start();
function verificarSesion() {
    if (!isset($_SESSION['user-rol'])) {
        header("Location: ../miusuario/");
        exit(); 
    }
}