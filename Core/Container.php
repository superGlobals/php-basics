<?php

namespace Core;

class Container
{

  protected $bindings = [];

  public function bind($key, $resolver) // to bind something in to the container or to add
  {
    $this->bindings[$key] = $resolver;
  }

  public function resolve($key) // resolve. to grab things out of the container 
  {
    if (!array_key_exists($key, $this->bindings)) {
      throw new \Exception("No matching binding found for {$key}");
    }

    $resolver = $this->bindings[$key];

    return call_user_func($resolver);
  }
}
