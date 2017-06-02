<?php

namespace Easir\SDK\Model;

use Easir\SDK\Model;

abstract class Option extends Model
{
    public $id, $value;

    /**
     * @static
     * @param string $id
     * @param string $value
     * @return static
     */
    public static function create($id, $value) {
        return new static(['id' => $id, 'value' => $value]);
    }
}