<?php
// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root'; // Replace with your MySQL username
$dbPassword = ''; // Replace with your MySQL password
$dbName     = 'tripletreade';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add a new order
function addOrder($pname, $quantity, $total_price, $date) {
    global $conn;
    
    $sql = "INSERT INTO orders (pname, quantity, total_price, date) VALUES ('$pname', '$quantity', '$total_price', '$date')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to fetch all orders
function getOrders() {
    global $conn;
    
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);
    $orders = array();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $orders[] = $row;
        }
    }
    
    return $orders;
}

// Function to update an order
function updateOrder($id, $pname, $quantity, $total_price, $date) {
    global $conn;
    
    $sql = "UPDATE orders SET pname='$pname', quantity='$quantity', total_price='$total_price', date='$date' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error updating record: " . $conn->error;
    }
}

// Function to delete an order
function deleteOrder($id) {
    global $conn;
    
    $sql = "DELETE FROM orders WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error deleting record: " . $conn->error;
    }
}

// Handle CRUD operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        // Add a new order
        $pname = $_POST['pname'];
        $quantity = $_POST['quantity'];
        $total_price = $_POST['total_price'];
        $date = $_POST['date'];

        $result = addOrder($pname, $quantity, $total_price, $date);

        if ($result === true) {
            echo "Order added successfully!";
        } else {
            echo "Error: " . $result;
        }
    } elseif (isset($_POST['update'])) {
        // Update an order
        $id = $_POST['id'];
        $pname = $_POST['pname'];
        $quantity = $_POST['quantity'];
        $total_price = $_POST['total_price'];
        $date = $_POST['date'];

        $result = updateOrder($id, $pname, $quantity, $total_price, $date);

        if ($result === true) {
            echo "Order updated successfully!";
        } else {
            echo "Error: " . $result;
        }
    } elseif (isset($_POST['delete'])) {
        // Delete an order
        $id = $_POST['id'];

        $result = deleteOrder($id);

        if ($result === true) {
            echo "Order deleted successfully!";
        } else {
            echo "Error: " . $result;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

    <h3>Update Order</h3>
    <form action="" method="post">
        <label for="id">Order ID:</label><br>
        <input type="text" id="id" name="id" required><br>

        <label for="pname">Product Name:</label><br>
        <input type="text" id="pname" name="pname" required><br>

        <label for="quantity">Quantity:</label><br>
        <input type="text" id="quantity" name="quantity" required><br>

        <label for="total_price">Total Price:</label><br>
        <input type="text" id="total_price" name="total_price" required><br>

        <label for="date">Date:</label><br>
        <input type="text" id="date" name="date" required><br>

        <input type="submit" name="update" value="Update Order">
    </form>
</body>
</html>