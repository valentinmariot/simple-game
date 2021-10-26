<?php

abstract class BaseManager
{
    
    private function __construct(array $data = [])
    {
        $this->data = $data;
    }
}