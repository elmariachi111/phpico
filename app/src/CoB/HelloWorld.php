<?php
namespace CoB;

class HelloWorld
{
    public $x = 0;
    public static $i = 0;
    public static $c = 0;

    public function whatsMyX() : int {
        return $this->x;
    }
    public function whatsOurI() : int {
        return self::$i;
    }
    public static function whatsOurC() : int {
        return self::$c;
    }

    public function incrementMyX() {
        $this->x = $this->x + 1;
    }

    public function incrementMyI() {
        self::$i = self::$i + 1;
    }

    public static function incrementOurC() {
        static::$c = static::$c + 1;
    }

    public function staticInline() {
        static $number;

        return $number++;
    }

}

