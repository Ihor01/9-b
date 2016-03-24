<?php
Include("connection.php");
if (isset($_POST["register"])) {
    if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name = htmlspecialchars($_POST['full_name']);
        $email     = htmlspecialchars($_POST['email']);
        $username  = htmlspecialchars($_POST['username']);
        $password  = htmlspecialchars($_POST['password']);
$query     = mysql_query("SELECT * FROM usertbl WHERE username='" . $username . "'") or die(mysql_error());
        $numrows   = mysql_num_rows($query);
        if ($numrows == 0) {
            $key = PASS_KEY;
            $sql    = "INSERT INTO usertbl
            (full_name, email, username,password)
            VALUES('$full_name', '$email', '$username', '$password')";
            $result = mysql_query($sql);
            if ($result) {
                $message = "Account Successfully Created";
                header("Location: intropage.php");
            } else {
                $message = "Failed to insert data information!";
            }
        } else {
            $message = "That username already exists! Please try another one!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>

	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

<!DOCTYPE html>
	<html lang="en">
    <?php include("includes/head.html")?>
	<body>
        <?php include("includes/nav.html")?>
        <article>
            <section>
                <h1>Регистрация</h1>
                <form action="register.php" id="registerform" method="post"name="registerform">
                    <p>
                        <label for="user_login">Полное имя<br>
                        <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label>
                    </p>
                    <p>
                        <label for="user_pass">E-mail<br>
                        <input class="input" id="email" name="email" size="32"type="email" value=""></label>
                    </p>
                    <p>
                        <label for="user_pass">Имя пользователя<br>
                        <input class="input" id="username" name="username"size="20" type="text" value=""></label>
                    </p>
                    <p>
                        <label for="user_pass">Пароль<br>
                        <input class="input" id="password" name="password"size="32"   type="password" value=""></label>
                    </p>
                    <p><input class="btn" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
                    <p>Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
                </form>
            </section>
        </article>
        <?php include("../includes/footer.html")?>
    </body>
</html>