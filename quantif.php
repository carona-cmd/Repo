<?php

$phoneNumbers = [
    '0102030405',
    '0112030405',
    '01 02 03 04 05',
    '1102030405',
    '01.02.03.04.05',
];

foreach ($phoneNumbers as $phoneNumber) {
    if (preg_match('/0(1|2|3|4|5|6|7|8|9|0)( ?((0|1|2|3|4|5|6|7|8|9|0)(0|1|2|3|4|5|6|7|8|9|0))){4}/', $phoneNumber)) {
        echo "$phoneNumber est au bon format." . PHP_EOL;
    } else {
        echo "$phoneNumber n'est pas au bon format." . PHP_EOL;
    }
}