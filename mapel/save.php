<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql = "INSERT INTO subjects SET subject='$subject', hours='$hours'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=mapel&s=add'>disini</a>";
}
