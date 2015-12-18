<?php

namespace Lib;

interface ConfigInterface
{

    /**
     * Given a key in format namespace.keyname it returns
     * associated value
     * @param string $key
     */
    public function get($key);
}
