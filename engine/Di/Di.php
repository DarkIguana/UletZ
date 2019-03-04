<?php
namespace Engine\Di;
/* 
 * 
 */
class Di
{
    private $container = [];
    /**
     * 
     * @param type $key
     * @param type $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->container[$key] = $value;
        return $this;
    }
    /**
     * 
     * @param type $key
     * @return type
     */
    public function get($key)
    {
        return $this->has($key);
    }
    /**
     * 
     * @param type $key
     * @return type
     */
    public function has($key)
    {
        return isset($this->container[$key]);
    }
}

