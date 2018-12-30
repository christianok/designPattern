<?php namespace design\adaptor;

/**
 * 适配器模式，是解决两个不相容的接口的模式。
 */
interface IMediaPlayer
{
    public function play($fileType, $filename);
}
