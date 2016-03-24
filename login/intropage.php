<?php
    Include("connection.php");
    session_start();
    if(!isset($_SESSION["session_username"])):
    header("location:login.php");
    else:
?>
    <?php include("includes/head.html")?>
    <body>
        <?php include("includes/nav.html")?>
        <article>
            <section>
                <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
                <p><a href="../index.php">На главную!</a></p>
                <p><a href="logout.php">Выйти</a> из системы</p>
            </section>
        </article>
    <?php include("../includes/footer.html")?>
    </body>         
<?php endif; ?>