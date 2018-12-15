<?php namespace design\template;

/**
 * 模版模式
 */
abstract class AbstractApi
{
    public function toJson($data)
    {
        return json_encode($data);
    }
}