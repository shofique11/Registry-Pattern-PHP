<?php
class  Registry{

    // Static array hold registered objects or values
    private static array $objects = [];

    // Add an object to the registry
    public static function set(string $key, mixed $value):void {
        self::$objects[$key] = $value;
    }

    // retrive an object from the registry

    public static function get($key):mixed {
        if (!isset(self::$objects[$key])) {
            throw new Exception("No entry is registerd for key: $key");
        }
        return self::$objects[$key];
    }
   // remove  an object from the registry
    public static function remove(string $key) {
        if(isset(self::$objects[$key])){
            unset(self::$objects[$key]);
        }
    }
}
?>