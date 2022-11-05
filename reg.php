<?php

$subject = 'Comment chercher une chaîne dans une autre ?';
$pattern = '/chaîne/';

preg_match($pattern, $subject, $matches);

var_dump($matches);
// si on cherche une chaine de caractere chaine on ecrit'/chaine/'



$sentence = 'Alice was beginning to get very tired of 
sitting by her sister on the bank, and of having nothing 
to do: once or twice she had peeped into the book her sister
 was reading, but it had no pictures or conversations in it, 
 “and what is the use of a book,” thought Alice “without
  pictures or conversations?”.';

if (preg_match('/Alice/', $sentence)) {
    echo 'Le mot Alice est présent dans la phrase.';
} else {
    echo 'Le mot Alice n\'est pas présent';
};


$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”.';

$count = preg_match_all('/Alice/', $sentence, $matches);

echo 'Le mot Alice est présent ' . $count . ' fois.';
// determine combien de fois alice se repete t il:
//$count