<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect('localhost', 'root', '', 'users') or die("Connection Failed: " . mysqli_connect_error());

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $enteredPassword = $_POST['password'];
        $hashedEnteredPassword = md5($enteredPassword); 

        $sql = "SELECT 1 FROM `user` WHERE `email` = '$email' AND `Password` = '$hashedEnteredPassword'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: black; border-radius: 20px; font-size: 30px;"> "Login Successful"</div>';
            } else {
                echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: black; border-radius: 20px; font-size: 30px;"> "Unsuccessful Login"</div>'; 
                exit; 
            }
        } else {
            echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: black; border-radius: 20px; font-size: 30px;">"Error Occurred: " . mysqli_error($conn)</div>';
        }
    } else {
        echo'<div style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; padding: 20px; background-color: white; color: white; border-radius: 20px; font-size: 30px;">"One or more required fields are missing."</div>';
    }

    mysqli_close($conn);
}
?>
<p>To go back to the main menu <a href="index.php">Click Here</a></p>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('back.jpg'); /* Change 'background.jpg' to your background image path */
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
