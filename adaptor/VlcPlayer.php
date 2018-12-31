<?php namespace design\adaptor;

class VlcPlayer implements IAdvancedMediaPlayer
{
    public function vlcPlay($filename)
    {
        echo 'vlc playing ' . $filename;
    }

    public function mp4Play($filename)
    {

    }
}
