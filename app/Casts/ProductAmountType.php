<?php


namespace App\Casts;


use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use ReflectionClass;
use ReflectionException;

class ProductAmountType implements Castable {

    const UNDEFINED = 0;
    const BY_PIECE = 1;
    const BY_WEIGHT = 2;

    /**
     * @throws ReflectionException
     */
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
                if (!in_array($value, ProductAmountType::getExistValues())) $value = ProductAmountType::UNDEFINED;
                return $value;
            }

            public function set($model, $key, $value, $attributes) {
                if (!in_array($value, ProductAmountType::getExistValues())) $value = ProductAmountType::UNDEFINED;
                return $value;
            }
        };
    }
}
