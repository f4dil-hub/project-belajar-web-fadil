<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">
</head>
<body>
    
<div class="register-box">
    <h2>Halaman Registrasi</h2>

    <form action="#" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username"
                       name="username" required>
            </li>

            <li>
                <label for="password">Password</label>
                <input type="password" id="password"
                       name="password" required>
            </li>

            <li>
                <label for="confirm_password">
                    Konfirmasi Password
                </label>
                <input type="password"
                       id="confirm_password"
                       name="confirm_password" required>
            </li>

            <li>
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </li>

            <li>
                <button type="submit">Register!</button>
            </li>
        </ul>
    </form>
</div>

</body>
</html>