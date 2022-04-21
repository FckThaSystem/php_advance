<?php

class ClassLoader
{
    public static function autoload($className){
        $fileName = explode('\\', $className);
        $filepath = __DIR__ . '/' . $fileName[count($fileName) - 1] . '.php';
        if(file_exists($filepath)){
            include $filepath;
        }
    }
}
spl_autoload_register([ClassLoader::class, 'autoload']);
