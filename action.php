<?php
if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $from = $_POST['email'];

    $subj = "poop"
    $to = "bradybbangasser@gmail.com";
    $headers = "from: ".$from." ".$name;
    $txt = "poop";

    mail($to, $subj, $txt, $headers);
    header("Location: index.php?mailsend");
}