<!DOCTYPE html>
<html>

<head>
    <title>Fizz Buzz</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-image: url('back.jpg'); /* Change 'background.jpg' to your background image path */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: #f0f0f0;
        text-align: center;
        margin: 0;
        padding: 0;
    }

        h1 {
            color: #3498db;
        }

        form {
            margin: 20px auto;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
        }

        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2184c9;
        }

        p {
            margin: 20px auto;
        }

        .output {
            text-align: left;
            margin: 20px auto;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
        }
    </style>
</head>

<body>
    <h1>Fizz Buzz</h1>
    <form method="post" action="">
        Enter a number: <input type="number" name="number" min="1" max="100" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            echo '<div class="output">';
            for ($i = 1; $i <= $number; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "Fizz Buzz<br>";
                } elseif ($i % 3 == 0) {
                    echo "Fizz<br>";
                } elseif ($i % 5 == 0) {
                    echo "Buzz<br>";
                } else {
                    echo "$i<br>";
                }
            }
            echo '</div>';
        } else {
            echo "Please enter a valid number.";
        }
    }
    ?>

    <p>Back to <a href="PHP.php">PHP PAGE</a></p>
</body>

</html>
