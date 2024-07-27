<?php

$dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "laphic";

    // Create connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_form_submissions (name, url, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $url, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

} else {
    echo 'ERROR!';
}
























