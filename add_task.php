<?php
require_once 'config.php';

if (isset($_POST['add'])) {
    if ($_POST['task'] != "") {
        $task = $_POST['task'];
        $addtasks = mysqli_query($db, "INSERT INTO `task` VALUES('', '$task', 'Trwający')");
        header('location:index.php');
    }
}
?>