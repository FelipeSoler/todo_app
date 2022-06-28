<?php
include('db.php');

if(isset($_GET['insert'])) {
    $name = $_GET['todo_name'];
    $status = $_GET['todo_status'];

    $sql = "INSERT todos (todo_name, todo_status) VALUES ('$name', '$status')";

    if(mysqli_query($conn, $sql)) {
        echo 'Datos agregados';
    }else{
        echo 'Error:' .$sql . ': - ' . mysqli_error($conn);
    }
    mysqli_close($conn);
    // Redirecciona al archivo index
    header('location: index.php');
}else{
    echo 'Error';
}


?>