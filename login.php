<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="loginprocess.php" method="post">
        <ul style="list-style-type: none;">
            <li>
                <label for="username">Masukkan Username</label>
                <input type="text" name="username" id="username">

            </li>
            <li><label for="password">Masukkan Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li><button type="submit">Kirim</button></li>
            <li>remember me?</li>
            <li><a href="register.php"  style="text-decoration: none;">register</a></li>
        </ul>

    </form>
    
    
</body>
</html>