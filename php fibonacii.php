<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
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

    h1 {
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

    label {
        font-weight: bold;
    }

    input[type="text"] {
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
        background-color: green;
    }

    .result {
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 1, 0.2);
        text-align: center;
    }
</style>

</head>
<body>
    <h1>Fibonacci Series in PHP</h1>

    <form method="POST">
        <label for="n">Enter the number of terms:</label>
        <input type="number" name="n" id="n" required>
        <br>
        <input type="submit" value="Generate Fibonacci Series">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int)$_POST["n"];
        $a = 0;
        $b = 1;

        echo "<h2>Fibonacci Series:</h2>";

        for ($i = 1; $i <= $n; $i++) {
            echo $a . ", ";

            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
    }
    ?>
</body>
<p>BACK TO <a href="PHP.php">PHP PAGE</a></p>
</html>
