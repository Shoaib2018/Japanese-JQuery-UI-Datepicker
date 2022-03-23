<?php
    echo "Posted value: ".$_POST['date']."<br>";
    "Printing the string: ";
    for ($i=0; $i < strlen($_POST['date']); $i++) {
        echo $_POST['date'][$i].", ";
    }

    echo "<br>Substr: ".substr($_POST['date'], 0, 4)."/".substr($_POST['date'], 7, 2)."/".substr($_POST['date'], 12, 2)."<br>";

    $t = strtotime(substr($_POST['date'], 0, 4)."/".substr($_POST['date'], 7, 2)."/".substr($_POST['date'], 12, 2));
    echo "Date format: ".date('Y/m/d', $t);
?>
