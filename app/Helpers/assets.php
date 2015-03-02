<?php

/**
 * @author      Chilion Snoek <chilion@josephdesign.nl>
 *
 * @param       $path
 * @return      mixed
 */
function assets ($path)
{
    $url = app('url')->asset($path);

    return str_replace("public/", "resources/assets/", $url);
}

