<?php
if (isset($_POST["avg"])) {
    if (!empty($_POST['from']) && !empty($_POST['to'])) {
        $link = db_connect();
        $avg = get_average($link, $_GET['id'], $_POST['from'], $_POST['to']);
        include("views/show_avg.php");
    } else {
        include("views/avg.php");
    }
} else {
    include("views/avg.php");
}
?>