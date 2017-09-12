<?php

//===============================================================
// script p1.controller.php
// This is the controller/logic script to output different quotes and messages on each page load.
// This page is included in index.php which will display the quotes.
// I understand it is not good to mix HTML and PHP. I felt there was not enough to cause an issue.
// I wanted to keep minimial php code in the index.php script.
// Class - HES - Dynamic Web Applications - Fall 2017
//===============================================================

/*
 * Quotes are being stored in an array.
 * I believe in the real world the quotes and messages would most likely be coming from a database.
 */
$quotes = ['q0', 'q1', 'q2'];

/*
 * function getQuotes
 * @param $quotes
 * function randomly chooses a quote and a message.
 */

function getQuotes($quotes) {

    $key = mt_rand(0, 2);
    $message = $quotes[$key];

    switch ($key) {
        case 0:
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>message</p>';
            break;
        case 1:
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>message</p>';
            break;
        case 2:
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>message</p>';
            break;
        default:
            return '<p class=\'error\'>OOpps! Something went haywire. Please try again.</p>';
    }
}

// No closing end tag needed ie
?>
