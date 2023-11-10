<?php

class Song {
    private int $ID;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private string $duration;

    public function getID(): int
    {
        return $this->ID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param int $ID
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param int $duration
     */
    public function __construct(int $ID, string $name, string $artist, int $trackNumber, string $duration)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

}