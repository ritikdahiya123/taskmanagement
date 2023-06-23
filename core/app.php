<!-- <?php
        // class app
        // {
        //     protected static $registry = [
        //         // 'config' => [],
        //         // 'database' => $querybuilder
        //     ];
        //     public static function bind($key, $value)
        //     {
        //         static::$registry[$key] = $value;
        //     }
        //     public static function get($key)
        //     {
        //         return $registry;
        //     }
        // }


        class App
        {
            public static $Registery = [];
        
            public static function bind($key, $value)
            {
                static::$Registery[$key] = $value;
            }
        
            public static function get($key)
            {
                if(! array_key_exists($key,static::$Registery)){
                    die("No key Bound in Container");
                }
                return static::$Registery[$key];
            }
        }

        ?> 