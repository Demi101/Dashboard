<head>
    <link rel="stylesheet" href="css/help.css"  type="text/css">
</head>

<?php
    $text = $_POST['text'];
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><p>(".date("g:i A").") <b>Luc Daalmeijer</b>: ".stripslashes(htmlspecialchars($text))."</p><img src='img/luc.jpg' class='chatfoto'/></div>");
    fclose($fp);
?>