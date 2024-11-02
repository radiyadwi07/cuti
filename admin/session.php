<?php
session_start();
if ($_SESSION['level'] == "admin" || $_SESSION['level'] == "manager"  ) {
	include "../conn.php";
} else {
    header('location:../login.php');
}
