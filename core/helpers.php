<?php

/**
 * Require a view.
 *
 * @param string $name
 * @param array  $data
 *
 * @return mixed
 */
function view($name, $data = [])
{
    extract($data);

    return require "src/views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
