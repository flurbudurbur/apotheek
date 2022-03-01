<?php
    switch (date('N')) {
        case '1':
            $date = "Maandag";
            break;
        case '2':
            $date = "Dinsdag";
            break;
        case '3':
            $date = "Woensdag";
            break;
        case '4':
            $date = "Donderdag";
            break;
        case '5':
            $date = "Vrijdag";
            break;
        case '6':
            $date = "Zaterdag";
            break;
        default:
            $date = "Zondag";
            break;
    }
echo $date;