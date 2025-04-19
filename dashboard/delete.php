<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = $_GET['table'];

    switch ($table) {
        case 'messagebox':
            $sql = "DELETE FROM `messagebox` WHERE `id`='$id'";
            $redirect = "./message.php";
            break;

        case 'comment':
            $sql = "DELETE FROM `comment` WHERE `id`='$id'";
            $redirect = "./comments.php";
            break;

        case 'login':
            $sql = "DELETE FROM `login` WHERE `id`='$id'";
            $redirect = "./Users.php";
            break;

        case 'movies':
            $sql = "DELETE FROM `movies` WHERE `id`='$id'";
            $redirect = "./movies.php";
            break;

        case 'ticket':
            $sql = "DELETE FROM `ticket` WHERE `id`='$id'";
            $redirect = "./ticket.php";
            break;
            
        case "theater":
            $sql = "DELETE FROM `theater` WHERE `id`='$id'";
            $redirect = "./theater.php";
            break;

        default:
            echo "<script>alert('Could not delete');</script>";
            exit;
    }

    $result = $connection->query($sql);

    if ($result === TRUE) {
        header("Location: $redirect");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
?>
