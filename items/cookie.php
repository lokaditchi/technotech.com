<?php


const month = 7 * 86400 * 4; // define a constant with name of ONE_WEEK

$returning_visitor = false;


if (!isset($_COOKIE['return'])) {
    setCookie('return', "t", time() +month);
} else {
    $returning_visitor = true;
}

