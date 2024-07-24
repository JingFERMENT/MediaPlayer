<?php

class Mp4Player implements AdvancedMediaPlayer {
    public function playVlc(string $fileName) {
        // Ne fait rien
    }

    public function playMp4(string $fileName) {
        echo "Playing mp4 file. Name: " . $fileName . PHP_EOL;
    }
}