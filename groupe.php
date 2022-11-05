<?php
$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîner|enchaînement/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîn(er|ement)/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);