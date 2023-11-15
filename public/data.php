<?php
$selectedPort = $_POST['port'];

if ($_POST['Selector'] == '1') {
    $comPort=fopen($selectedPort, "w+");
    sleep(2);
    fwrite($comPort,'n');
    echo "Light On";
}
elseif ($_POST['Selector'] == '2') {
    $comPort=fopen($selectedPort, "w+");
    fwrite($comPort,'f');
    echo "Light Off";
}
?>