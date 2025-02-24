<?php

session_start();
require "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($email == "" || $password == "") {
        die("Please fill in all the required fields.");
    }

    if ($password != $confirm_password) {
        die("Passwords do not match.");
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        die("Email already exists.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

    $res = $conn->query($sql);

    if ($res) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CS4116</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container-sm border border-5 mt-5 w-25 p-3">
    <h1 class="text-center m-5">Register</h1>
    <form method="post" action="register.php">
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control required" placeholder="Email address" required/>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control required" placeholder="Password" required />
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control required" placeholder="Password" required />
        </div>

        <div class="row mb-4">
            <div class="text-center">
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Register</button>
            </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>