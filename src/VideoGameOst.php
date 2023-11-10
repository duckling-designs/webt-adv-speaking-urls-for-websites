<?php

class VideoGameOst {
    private int $ID;
    private string $name;
    private string $videogameName;
    private int $releaseYear;
    private array $trackList;

    public function getID(): int
    {
        return $this->ID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getVideogameName(): string
    {
        return $this->videogameName;
    }

    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    public function getTrackList(): array
    {
        return $this->trackList;
    }


    /**
     * @param int $ID
     * @param string $name
     * @param string $videogameName
     * @param int $releaseYear
     * @param array $trackList
     */
    public function __construct(int $ID, string $name, string $videogameName, int $releaseYear, array $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videogameName = $videogameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

}