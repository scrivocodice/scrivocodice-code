<?php

function levelOne() {
    levelTwo();
}

function levelTwo() {
    levelThree();
}

function levelThree() {
    undefinedFunction(); // fatal error
}

levelOne();
