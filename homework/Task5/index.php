<?php

$threeLevelArray = array(
    'lvl1' => array(
        'lvl2' => array(
            'lvl3' => array()
        )
    )
);

$newElement = 'qq';

$threeLevelArray['lvl1']['lvl2']['lvl3'][] = $newElement;

print_r($threeLevelArray);

?>