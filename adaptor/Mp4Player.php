<?php namespace design\adaptor;

class Mp4Player implements IAdvancedMediaPlayer
{
    public function mp4Play($filename)
    {
        echo 'mp4 playing' . $filename;
    }

    public function vlcPlay($filename)
    {

    }
}
