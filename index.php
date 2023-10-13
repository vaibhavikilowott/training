<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
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

        nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

        nav {
            
            background-color: #333;
            color: #fff;
            padding: 0px 0;
        }
        
        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 40px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        header {
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 40px;
        }

        main {
            padding: 20px;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        section img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        /* Additional CSS for the registration form */
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 1, 0.2);
            text-align: center;
            margin: 0 auto;
        }

        .container h2 {
            color: #3498db;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #3498db;
            color: olivedrab;
            padding: 10px 20px;
            border: black;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.2s;
        }

        .submit {
            display: block;
            width: 40%;
            background-color: orangered;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 20px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: olivedrab;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Languages</a>
                <div class="dropdown-content">
                    <a href="PHP.php">PHP</a>
                    <a href="SQL.php">SQL</a>
                    <a href="JavaScript.php">JavaScript</a>
                </div>
            </li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="FetchingDetails.php">Fetch Details</a></li>
            

        </ul>
    </nav>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <main>
        <section id="languages">
            <h2>Programming Languages</h2>
            <p>
                Explore popular programming languages used for web development and software engineering.
            </p>
            <p>
                PHP: PHP is a server-side scripting language used for web development. It's known for its simplicity and flexibility.
            </p>
            <p>
                SQL: SQL (Structured Query Language) is a language used for managing and querying relational databases.
            </p>
            <p>
                JavaScript: JavaScript is a versatile language used for client-side web development. It adds interactivity to websites.
            </p>
            <img src="2.jpg" alt="Programming Languages">
        </section>
        <section id="databases">
            <h2>Databases</h2>
            <p>
                Learn about databases and data management systems used to store and retrieve data efficiently.
            </p>
            <p>
                MySQL: MySQL is an open-source relational database management system (RDBMS) known for its speed and reliability.
            </p>
            <p>
                PostgreSQL: PostgreSQL is a powerful, open-source object-relational database system known for its extensibility.
            </p>
            <p>
                MongoDB: MongoDB is a NoSQL database that stores data in a flexible, JSON-like format.
            </p>
            <img src="3.jpg" alt="Databases">
        </section>
    </main>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
</body>

</html>
