<form action="login.php" method="POST">
    <h2>Login Sistem</h2>
    
    <?php if(isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="btn_login">Masuk</button>
</form>