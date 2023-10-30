<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup" style="">
        <h1>Sign Up</h1>
        <h4>It's take a minute</h4>
        <form method="post">
            <label for="">First Name</label>
            <input type="text" name="fname" required><br>
            <label for="">Last Name</label>
            <input type="text" name="lname" required><br>
            <label for="">Gender</label>
            <input type="text" name="gender" required><br>
            <label for="">Contact Number</label>
            <input type="text" name="number" required><br>
            <label for="">Email</label>
            <input type="text" name="email" required><br>
            <label for="">Password</label>
            <input type="password" name="password" required><br>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
</body>
<script src="script.js"></script>
</html>