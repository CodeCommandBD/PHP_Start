<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        require_once('../DB/config.php');

        $query = "SELECT * FROM Authentication WHERE ID=$id";

        $result = $connect->query($query);

        $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    
</head>
<body>
    <form action="update_data.php?id=<?php echo $row['id']?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" value="<?php echo $row['username']?>">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']?>">
        <button type="submit" name="submit">Update</button>
    </form>
    
</body>
</html>