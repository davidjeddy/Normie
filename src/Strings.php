<?php

/**
 * Impliment the SPL stristr parameters in the `find X in Y` order.
 * 
 * @param $needle
 * @param $haystack
 * @param bool $before_needle
 * @return string
 */
function norm_stristr($needle, $haystack, $before_needle = FALSE) {
    return \stristr($haystack, $needle, $before_needle);
}
