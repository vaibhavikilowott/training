<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'users') or die("Connection Failed: " . mysqli_connect_error());

    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encpassword = md5($password);

        $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES ('$id', '$name', '$email', '$encpassword')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: green; border-radius: 20px; font-size: 28px;">"Registration successful"</div>';
            exit;
        } else {
            echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: red; border-radius: 20px; font-size: 28px;"> "Error Occurred: Unsucessfull Registration "</div>';
        }
    } else {
        echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: #FF5733; color: white; border-radius: 10px; font-size: 18px;">"One or more required fields are missing."</div>';
    }

    mysqli_close($conn);
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('back.jpg'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #3498db;
    }

    form {
        background-color: rgba(255, 255, 255, 0.9);
        width: 400px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 1, 0.2);
        text-align: center;
        margin: 0 auto;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 20px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.2s;
    }

    input[type="submit"]:hover {
        background-color: #2184c9;
    }
</style>
