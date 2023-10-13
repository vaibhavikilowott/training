<!DOCTYPE html>
<html>

<head>
    <title>Select Column</title>
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
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select {
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
</head>

<body>
    <h1>Select Column to Display</h1>
    <form action="fetch.php" method="GET">
        <label for="column_name">Select a Column:</label>
        <select name="column_name" id="column_name">
            <option value="ID">ID</option>
            <option value="Name">Name</option>
            <option value="Email">Email</option>
            <option value="Password">Password</option>
        </select>
        <br>
        <input type="submit" value="Fetch Data">
    </form>
</body>

</html>
