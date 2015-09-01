<?php

function generate_random_array() {

    //Unknown array size
    $an_array = array();

    //An array with size between 1 to 10
    $array_length = rand(0,10) + 1;


    //Loop to generate an array between 1 to 10 with random numbers between 0 and 100

    for ($index = 0; $index < $array_length; $index++) {
        $random_number = rand(0,100) + 1;
        $an_array[$index] = $random_number;
        echo "Item [" . $index . "] = ". $an_array[$index] . "<br/>";
    }

    $largest_value = $an_array[0];

    // Loop to find the largest number
    for ($index = 0; $index < $array_length; $index++) {
        if ($largest_value < $an_array[$index]) {
            $largest_value = $an_array[$index];
        }

    }

    echo "<br/>";
    echo "The largest number = " . $largest_value;

    $smallest_value = &$an_array[0];

    // Loop to find the smallest number
    for ($index = 0; $index < $array_length; $index++) {

        if ($smallest_value > $an_array[$index]) {
            $smallest_value = $an_array[$index];
        }
    }

    echo "<br/>";
    echo "The smallest number = " . $smallest_value;


}
