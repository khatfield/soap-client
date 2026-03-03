<?php

namespace Khatfield\SoapClient\Result;

class SObject
{
    public $Id;

    public function getId(): string
    {
        return $this->Id;
    }

    public function get(string $field, $default = null): mixed
    {
        if(isset($this->$field)){
            return $this->$field;
        } else {
            return $default;
        }
    }

    public function set(string $field, $value): SObject
    {
        $this->$field = $value;

        return $this;
    }

}
