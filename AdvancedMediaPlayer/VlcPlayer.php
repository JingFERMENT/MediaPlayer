<?php

class VlcPlayer implements AdvancedMediaPlayer {
    public function playVlc(string $fileName) {
        echo "Playing vlc file. Name: " . $fileName . PHP_EOL;
    }

    public function playMp4(string $fileName) {
        // Ne fait rien
    }
}