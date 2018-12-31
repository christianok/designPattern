<?php namespace design\adaptor;

interface IAdvancedMediaPlayer
{
    public function vlcPlay($filename);

    public function mp4Play($filename);
}