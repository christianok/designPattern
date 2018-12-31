<?php namespace design\adaptor;

class AudioPlayer implements IMediaPlayer
{
    protected $mediaPlayer;

    public function __construct()
    {
    }

    public function play($fileType, $filename)
    {
        if (strtolower($fileType) == 'mp3') {
            echo 'mp3 playing';
        }

        if (strtolower($fileType) == 'vlc' ||
            strtolower($fileType) == 'mp4'
        ) {
            $player = new MediaPlayer($fileType);
            $player->play($fileType, $filename);
        }
    }
}
