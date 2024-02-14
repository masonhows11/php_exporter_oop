<?php


//// for automatic include class & files

spl_autoload_register(function ($class) {

    //// $class is class name
    //// is class name that automatic founded
    //// and below line include that class for call it

    //// below line in directory of classes & files
    $class_file = __DIR__ . "/$class.php";
    if (file_exists($class_file) and is_readable($class_file)) {
        include $class_file;
    } else {

        die(" class load error ");
     }
    //// var_dump($class_file);
});
