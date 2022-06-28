<?php
include('db.php');

if (isset($_GET['id_todo'])) {
    $id = $_GET['id_todo'];

    $query = "DELETE FROM todos WHERE id_todo = $id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header('location: index.php');
}else{
    echo "Id doesn't exists, please try again";
};
?>