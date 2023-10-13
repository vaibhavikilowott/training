<!DOCTYPE html>
<html>
<head>
    <title>Selection Sort</title>
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
    <form method="post" action="">
        <label for="elements">Enter the elements of the array, separated by spaces:</label>
        <input type="text" name="elements">
        <br>
        <input type="submit" value="Sort">
    </form>
    
</body>
<p>BACK TO <a href="PHP.php">PHP PAGE</a></p>
</html>
<?php

function selectionSort(&$arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i; // Assume the current index has the minimum value

        // Find the index of the minimum element in the unsorted portion
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap the minimum element with the first element of the unsorted portion
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['elements'];
    $arr = explode(' ', $input);
    $arr = array_map('intval', $arr);

    echo "Original array: " . implode(" ", $arr) . "<br>";
    selectionSort($arr);
    echo "Sorted array: " . implode(" ", $arr);
}
?>

