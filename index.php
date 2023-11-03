<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title id="pageTitle">Rappel : PHP</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="login.php"> <!-- Specify the PHP script to handle the form data -->
            <div class="user-box">
                <input type="text" name="code" required> <!-- Use the 'name' attribute to define the field name -->
                <label>Code</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required> <!-- Use the 'name' attribute to define the field name -->
                <label>Password</label>
            </div>
            <button type="submit">Submit</button> <!-- Use a 'button' element instead of an 'a' element for form submission -->
        </form>
    </div>
</body>
</html>
