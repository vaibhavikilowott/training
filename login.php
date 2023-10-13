<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: darkgray;
            background-image: url('back.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-form {
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
            text-align: center;
            width: 300px;
        }

        #email,
        #password {
            width: 80%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #submit-button {
            background-color: lightblue;
            color: black;
            padding: 12px 15px;
            border: black;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #submit-button:hover {
            background-color: green;
        }

        #login-form h2 {
            font-size: 5rem;
            color: blue; /* Updated title color */
        }

        #login-form label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: purple;
        }

        #login-form a {
            color: green;
            text-decoration: antiquewhite;
        }

        #login-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="login-form">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" id="submit-button" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Signup</a></p>
    </div>
</body>
</html>
