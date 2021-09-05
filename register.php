<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="registerinfo.php" method="post">
        <ul style="list-style-type: none;">
            <li>
                <label for="nama">Masukan Username</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="password">Masukkan Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="Email">Masukkan Email</label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <button type="submit">Kirim</button>
            </li>
        </ul>

    </form>
    
</body>
</html>