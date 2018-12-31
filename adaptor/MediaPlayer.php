<?php namespace design\adaptor;

class MediaPlayer implements IMediaPlayer
{
    protected $mediaPlayer;

    public function __construct($fileType)
    {
        if ($fileType == 'vlc') {
            $this->mediaPlayer = new VlcPlayer();
        }else if ($fileType == 'mp4') {
            $this->mediaPlayer = new Mp4Player();
        }
    }

    public function play($fileType, $filename)
    {
        if ($fileType == 'vlc') {
            $this->mediaPlayer->vlcPlay($filename);
        }else if ($fileType == 'mp4') {
            $this->mediaPlayer->mp4Play($filename);
        }
    }
}
