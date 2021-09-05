<?php
        $date = date("d.m.Y");
        $time = date("H:i");
        $day = date('l');

        function message($date, $time, $name, $day){
            if ($time < 12) {
                echo "Good morning $name. <br> The current time is $time and today's date is $date <br>";
            } elseif ($time > 12 && $time < 17) {
                echo "Good afternoon $name. <br> The current time is $time and today's date is $date <br>";
            } elseif ($time > 17) {
                echo "Good night $name. <br> The current time is $time and today's date is $date <br>";
            } else {
                echo "Sleeping huh!? <br>";
            }
            echo "Today's $day btw.";
        }

        message($date, $time, 'Daniel', $day);
?>