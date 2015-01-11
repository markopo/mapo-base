<?php
/**
 * Bootstrapping functions, essential and needed for Mapo to work together with some common helpers.
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
    echo "Mapo: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');


/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
    $path = MAPO_INSTALL_PATH . "/src/{$class}.php";
    if(is_file($path)) {
        include($path);
    }
    else {
        throw new Exception("Classfile '{$class}' does not exists.");
    }
}
spl_autoload_register('myAutoloader');