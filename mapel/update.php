<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql = "UPDATE subjects SET subject='$subject', hours='$hours' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=mapel');
    } else {
        include('index.php?m=mapel');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    //echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=mapel&s=add'>disini</a>";
    echo '<script>windows.history.back()</script>'; //JavaScript 
}
