<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <br>
        <br>

        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <br>
        <br>

        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <label>comments</label>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label>Gender</label>
        <input type="radio" name="gender" id="male" value="male">Male
        <input type="radio" name="gender" id="female" value="female">Female
        <br>
        <br>
        <label>hobbies</label>
        <input type="checkbox" name="hobbies[]" id="cricket" value="cricket">Cricket
        <input type="checkbox" name="hobbies[]" id="football" value="football">Football
        <input type="checkbox" name="hobbies[]" id="reading" value="reading">Reading
        <br>
        <br>
        <label for="profile">Profile</label>
        <input type="file" name="profile" id="profile">
        <br>
        <br>

        <button type="submit">submit</button>
    </form>

    
</body>
</html>