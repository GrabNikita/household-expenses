<?php


namespace App\Casts;


use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use ReflectionClass;

class Unit implements Castable {

    const UNDEFINED = 0;
    const PIECE = 1;
    const KILOGRAM = 2;
    const LITER = 3;

    static public function getExistValues(): array {
        $class = new ReflectionClass(get_called_class());
        return $class->getConstants();
    }

    /**
     * @inheritDoc
     */
    public static function castUsing(array $arguments) {
        return new class implements CastsAttributes {
            public function get($model, $key, $value, $attributes) {
                if (!in_array($value, Unit::getExistValues())) $value = Unit::UNDEFINED;
                return $value;
            }

            public function set($model, $key, $value, $attributes) {
                if (!in_array($value, Unit::getExistValues())) $value = Unit::UNDEFINED;
                return $value;
            }
        };
    }
}
