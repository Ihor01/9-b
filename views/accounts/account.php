<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
        <main>
            <article>
                <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
                <p><a href="index.php?article=main">На главную!</a></p>
                <p><a href="index.php?action=logout">Выйти</a> из системы</p>
            </article>
        </main>
<?php include("includes/footer.html");?>