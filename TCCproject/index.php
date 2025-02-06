<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Item Management System</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        /* Container for layout */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #007BFF;
        }

        /* Navigation */
        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            padding: 10px;
            background-color: #007BFF;
            border-radius: 5px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
        }

        nav ul li:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to the Item Management System</h1>
        </header>
        <nav>
            <ul>
                <li><a href="view.php">View Items</a></li>
                <li><a href="add.php">Add Item</a></li>
            </ul>
        </nav>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Item Management System. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
