<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="container mt-5 w-25">
        <form action="insert.php" method="get">
            <div class="mb-3">
                <label for="todo_name" class="form-label">To do name.</label>
                <input type="text" class="form-control" id="todo_name" name='todo_name'>
            </div>
            <div class="mb-3">
                <label for="todo_status" class="form-label">To do status</label>
                <select class="form-select" name="todo_status" <option selected>Select status</option>
                    <option value="1">Open</option>
                    <option value="2">In progress</option>
                    <option value="3">Done</option>
                </select>
            </div>
            <button type="submit" name="insert" class="btn btn-dark">Submit</button>
        </form>
    </div>

    <div class="container mt-5 w-25">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Task name.</th>
                    <th>Task status.</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM todos";
                $result = mysqli_query($conn, $query);
                while( $row = mysqli_fetch_array($result)) { 
                    switch($row['todo_status']) {
                        case('1'):
                            $row['todo_status'] = 'Open';
                            break;
                        case('2'):
                            $row['todo_status'] = 'In progress';
                            break;
                        case('3'):
                            $row['todo_stauts'] = 'Done';
                            break;
                    }
                    ?>
                <tr>
                    <td> <?php echo $row['todo_name'] ;?></td>
                    <td> <?php echo $row['todo_status'] ;?></td>
                    <td>
                        <a href="edit_task.php?id_todo=<?php echo $row['id_todo'] ;?>" class="btn btn-secondary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                        <a href="delete_task.php?id_todo=<?php echo $row['id_todo'] ;?>" class="btn btn-danger"> 
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>