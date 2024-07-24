<?php

require_once 'MediaPlayer.php';

// une classe qui ne peut lire que des fichiers mp3.
class AudioPlayer implements MediaPlayer
{
    private $mediaAdapter;

    public function play(string $audioType, string $fileName)
    {
        // Lecture des fichiers mp3
        if ($audioType === 'mp3') {
            echo "Playing mp3 file. Name: " . $fileName . PHP_EOL;
        }
        // Utilisation de MediaAdapter pour les autres types de fichiers
        else if ($audioType === 'vlc' || $audioType === 'mp4') {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. " . $audioType . " format not supported" . PHP_EOL;
        }
    }
}
