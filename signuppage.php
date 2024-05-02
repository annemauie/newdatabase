<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <h2>Sign Up</h2>
    <form action="signup.php" method="post">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname"><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname"><br>

        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="submit" value="Sign Up">
    </form>
</body>
</html>
