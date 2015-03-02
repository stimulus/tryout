<?php

/**
 * @author Chilion Snoek <chilion@josephdesign.nl>
 *
 * @param $content_to_translate
 * @return mixed
 */
function __($content_to_translate){
    return Lang::get($content_to_translate);
}