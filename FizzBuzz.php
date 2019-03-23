<?php

    function fizzbuzz($i){
        if($i < 100){
            if($i % 15 === 0){
                print 'FizzBuzz'.PHP_EOL;
            } elseif($i % 3 === 0) {
                print 'Fizz'.PHP_EOL;
            } elseif ($i % 5 === 0){
                print 'Buzz'.PHP_EOL;
            } else {
                print $i.PHP_EOL;
            }
            fizzbuzz($i + 1);
        }
    }
    fizzbuzz(1);