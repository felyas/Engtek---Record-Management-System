<?php

namespace Core;

class Container
{

    protected $bindings = [];

    // resolver - to do something
    public function bind($key, $resolver)
    {
        // ['$key' => $resolver]
        $this->bindings[$key] = $resolver;
    }

    public function resolver($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("Container is not found");
        }

        $resolver = $this->bindings[$key];
        // call_user_func is a function that automatically call the fucntion inside it.
        return call_user_func($resolver);
    }
}
