<?php
$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$comments = $_POST["comments"];
$gender = $_POST["gender"];
$hobbies = $_POST["hobbies"];
$profile = $_FILES["profile"];


echo "<h1>Username : $username</h1>";
echo "<h1>Email : $email</h1>";
echo "<h1>Password : $password</h1>";
echo "<h1>Comments : $comments</h1>";
echo "<h2>Gender : $gender</h2>";

if ($hobbies) {
    foreach ($hobbies as $hobby) {
        echo "<h2>Hobby : $hobby</h2>";
    }
}

if ($profile["type"] == "image/jpeg" || $profile["type"] == "image/png" || $profile["type"] == "image/jpg") {
    move_uploaded_file($profile["tmp_name"], "uploads/" . $profile["name"]);
    echo "<img src='uploads/" . $profile["name"] . "' alt='Profile'>";
} else {
    echo "Invalid file type";
}


?>