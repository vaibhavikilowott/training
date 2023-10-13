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
</style><!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort</title>
</head>
<body>
    <h1>Bubble Sort in PHP</h1>

    <?php
    function bubbleSort($arr) {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            $swapped = false;

            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap arr[$j] and arr[$j + 1]
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;

                    $swapped = true;
                }
            }

            // If no two elements were swapped in the inner loop, the array is already sorted
            if (!$swapped) {
                break;
            }
        }

        return $arr;
    }

    $arrayLength = "";
    $inputArray = "";
    $sortedArray = array();
    $formSubmitted = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrayLength = (int)$_POST["arrayLength"];
        $inputArray = $_POST["inputArray"];
        $inputArray = explode(",", $inputArray);

        // Remove any leading/trailing white spaces from each element
        $inputArray = array_map("trim", $inputArray);

        $validInput = true;

        foreach ($inputArray as $element) {
            if (!is_numeric($element) || !ctype_digit($element)) {
                $validInput = false;
                break;
            }
        }

        if (!$validInput) {
            $message = "Please enter valid integer values.";
        } else {
            // Convert input values to integers
            $inputArray = array_map("intval", $inputArray);

            $elementCount = count($inputArray);

            if ($elementCount < $arrayLength) {
                $missingElements = $arrayLength - $elementCount;
                $message = "Enter at least " . $missingElements . " more element" . ($missingElements > 1 ? "s" : "") . ".";
            } elseif ($elementCount > $arrayLength) {
                $message = "The array size does not match the number of elements entered.";
            } else {
                $sortedArray = bubbleSort($inputArray);
                $formSubmitted = true;
            }
        }
    }
    ?>

    <?php if (!$formSubmitted) { ?>
        <form method="POST">
            <label for="arrayLength">Enter the length of the array:</label><br>
            <input type="number" name="arrayLength" id="arrayLength" required>
            <br>
            <label for="inputArray">Enter comma-separated numbers:</label>
            <input type="text" name="inputArray" id="inputArray" required>
            <br>
            <input type="submit" value="Sort">
        </form>
        <?php if (isset($message)) { ?>
            <p style='color: red;'><?php echo $message; ?></p>
        <?php } ?>
    <?php } ?>

    <?php if ($formSubmitted) { ?>
        <h2>Sorted array:</h2>
        <?php
        echo implode(", ", $sortedArray);
        ?>
    <?php } ?>
</body>
<p>BACK TO <a href="PHP.php">PHP PAGE</a></p>
</html>
