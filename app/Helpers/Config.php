<?php

namespace App\Helpers;

class Config
{
    
    protected $path = '../config/';
    protected $configs = [];
    
    public function __construct()
    {
        $this->loadFiles();
    }
    
    public function get($data, $default = null)
    {
        
        if (array_key_exists($data, $this->configs)) {
            return $this->configs["{$data}"];
        }
        
        return $default;
    }
    
    protected function loadFiles()
    {
        $files = array_diff(scandir($this->path), ['.', '..']);
        foreach ($files as $file) {
            $key = basename($file, '.php');
            $this->configs[$key] = require $this->path . $file;
        }
        $this->configs = $this->flatten($this->configs);
    }
    
    protected function flatten($array, $prefix = '')
    {
        $result = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = $result + $this->flatten($value, $prefix . $key . '.');
            } else {
                $result[$prefix . $key] = $value;
            }
        }
        
        return $result;
    }
    
    
}