<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Redirect to a confirmation page

    // Redirect to the same page with #anchor-name
    header('Location: ' . $_SERVER['SCRIPT_URI'] . '#anchor-name');
    exit;
    // Get form data
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $married = isset($_POST['State']) ? 'Yes' : 'No'; // Handle checkbox
    $hasWork = isset($_POST['work']) ? 'Yes' : 'No'; // Handle checkbox
    $hasDriversLicense = isset($_POST['L. Car']) ? 'Yes' : 'No'; // Handle checkbox

    // Database connection details (replace with your credentials)
    $host = 'localhost';
    $dbUsername = 'your_username';
    $dbPassword = 'your_password';
    $dbName = 'your_database_name';

    // Create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create the database (if it doesn't exist)
    $createDBQuery = "CREATE DATABASE IF NOT EXISTS $dbName";
    mysqli_query($conn, $createDBQuery);

    // Select the database
    mysqli_select_db($conn, $dbName);

    // Create the table (if it doesn't exist)
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        gender VARCHAR(20) NOT NULL,
        married ENUM('Yes', 'No') NOT NULL,
        has_work ENUM('Yes', 'No') NOT NULL,
        has_drivers_license ENUM('Yes', 'No') NOT NULL
    )";
    mysqli_query($conn, $createTableQuery);

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO users (username, email, gender, married, has_work, has_drivers_license) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters for prepared statement
    mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $gender, $married, $hasWork, $hasDriversLicense);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Form data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close statement and connection
    
    mysqli_stmt_close($stmt)