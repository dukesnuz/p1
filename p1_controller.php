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
$quotes = [
  'Weather forecast for tonight: Dark',
  'Even a mistake may turn out to be the one thing necessary to a worthwhile achievement.',
  'If God wanted us to fly, He would have given us tickets.'
  ];

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
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>George Carlin</p>';
            break;
        case 1:
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>Henry Ford</p>';
            break;
        case 2:
            return '<p class=\'quote\'>' . $message . '</p><p class=\'quoteMessage\'>Mel Brooks</p>';
            break;
        default:
            return '<p class=\'error\'>OOpps! Something went haywire. Please try again.</p>';
    }
}

/*
* Ok so I felt like adding my about me information into a string variable and printing the variable on the index.php page.
* Reason - this is a class in Dynamic Web Applications and in the real world this data may be coming from a server.
*/
$about = 'Greetings My name is David. I am currently working towards a Web Develpment Certificate. I love learning and
          working with code. I started out working with software using <a href="https://en.wikipedia.org/wiki/FileMaker" target="_blank">Filemaker</a>
          way way back. Sometime around when the first few releases came out. Makes you want to click the Filemaker link now. I have
          been in the transportation industry as a career. Coding has always been a hobby and I developed Filemaker solutions for my company.
          Over the past few years I have expanded my desire to branch out into the coding world. As a result I have taken classes
          and self-taught myself HTML, CSS, JavaScript, jQuery and a little PHP and MySQL. I am also intersted in learning Angular and
          I have studied a little basic Angular code. My goal is to turn my hobby of coding into a career. Simply put I want to get paid to
          play with code. I am really looking forward to the rest of this class and the other technologies we are going to be learning.
          I very much enjoy working with PHP and I hope to come away with a much more clearer and deeper understanding of it.
          ';
// No closing end tag needed ie
