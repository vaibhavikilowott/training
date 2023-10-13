<!DOCTYPE html>
<html>
<head>
    <title>Fetched Data</title>
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

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'users') or die("Connection Failed: " . mysqli_connect_error());

    if (isset($_GET['column_name'])) {
        $column_name = mysqli_real_escape_string($conn, $_GET['column_name']);
        
        $sql = "SELECT `$column_name` FROM `user`";
        
        $result = mysqli_query($conn, $sql);

        if ($result === false) {
            echo "Error Occurred: " . mysqli_error($conn);
        } else {
            echo "<table>";
            echo "<tr><th>$column_name</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row[$column_name] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    } else {
        echo "Please provide a valid column name using the form.";
    }

    mysqli_close($conn);
    ?>
    <p>To fetch detail of other coloumn <a href="FetchingDetails.php">Click Here</a></p>
</body>
</html>
