<?php

$ann = fann_create(array(256, 128, 3), 1.0, 0.7);файлах en.txt, fr.txt, pl.txt хранится текс размером где-то в 10000 символов для конкретного языка
 * */
fann_train($ann,
    array(
        array(
            generate_frequencies(file_get_contents("en.txt")), // Inputs
            array(1, 0, 0) // Outputs
        ),
        array(
            generate_frequencies(file_get_contents("fr.txt")), // Inputs
            array(0, 1, 0) // Outputs
        ),
        array(
            generate_frequencies(file_get_contents("pl.txt")), // Inputs
            array(0, 0, 1) // Outputs
        ),
    ),
    100000,
    0.00001,
    1000
);

fann_save($ann,"classify.txt");


function generate_frequencies($text){
    $text = preg_replace("/[^\p{L}]/iu", "", strtolower($text));
    $total = strlen($text);
    $data = count_chars($text);
    array_walk($data, function (&$item, $key, $total){
        $item = round($item/$total, 3);
    }, $total);
    return array_values($data);
}

?>
