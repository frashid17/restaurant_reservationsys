<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Setup</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Center content */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #f7f7f7, #e6e6e6);
            color: #333;
        }

        .container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #555;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);
        }

        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Check if setup has already been completed
        if (file_exists(__DIR__ . '/setup_completed.flag')) {
            echo "<h1>Setup Already Completed</h1>";
            echo "<p>Click below to start using the system.</p>";
        } else {
            echo "<h1>Restaurant Setup</h1>";
            echo "<p>The database has been created, and the setup process is almost complete.</p>";
        }
        ?>
        <a href="customerSide/home/home.php" class="button">Proceed to System</a>
    </div>
</body>
</html>
