<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM items WHERE id = $id");
$item = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $conn->query("UPDATE items SET name='$name', description='$description', price='$price' WHERE id=$id");
    header('Location: view.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .form-container {
            width: 40%;
            margin: 50px auto;
            background: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        form input[type="text"],
        form input[type="number"],
        form textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        form textarea {
            resize: none;
        }

        form button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        form button:hover {
            background-color: #218838;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
        }

        .back-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Item</h1>
    <div class="form-container">
        <form method="POST">
            <label for="name">Item Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $item['name']; ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo $item['description']; ?></textarea>

            <label for="price">Price (RM):</label>
            <input type="number" id="price" name="price" step="0.01" value="<?php echo $item['price']; ?>" required>

            <button type="submit">Update Item</button>
        </form>
        <div class="back-button">
            <a href="view.php">Back to Items List</a>
        </div>
    </div>
</body>
</html>
