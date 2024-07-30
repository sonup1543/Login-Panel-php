<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

require_once 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM contact WHERE id = $id";
    $result = mysqli_query($link, $query);

    if ($result) {
        $_SESSION['message'] = 'Record deleted successfully';
    } else {
        $_SESSION['message'] = 'Failed to delete record: ' . mysqli_error($link);
    }
} else {
    $_SESSION['message'] = 'Invalid request';
}

header('Location: welcome.php');
exit();
?>
