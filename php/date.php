<?php
$day = date('N');
switch ($day) {
    case '1':
        $open = "van 10:00 - 18:00 open";
        break;
    case '2':
        $open = "van 10:00 - 18:00 open";
        break;
    case '3':
        $open = "van 10:00 - 18:00 open";
        break;
    case '4':
        $open = "van 10:00 - 18:00 open";
        break;
    case '5':
        $open = "van 10:00 - 18:00 open";
        break;
    case '6':
        $open = "van 12:00 - 17:00 open";
        break;
    default:
        $open = "gesloten";
        break;
}
echo 'Wij zijn vandaag ', $open;