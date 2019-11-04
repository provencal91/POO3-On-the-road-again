<?php

class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var integer
     */
    protected $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeats;
    /**
     * @var integer
     */
    protected $nbWheels;


    /*------------------------CONSTRUCTEUR----------------------------- */
    public function __construct(string $color, int $nbSeats, int $currentSpeed)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this -> currentSpeed = $currentSpeed;

    }
    /*-----------------------METHODES---------------------------------- */
    public function forward(): string
    {
        $this->currentSpeed ;
        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Vehicle
     */
    public function setColor(string $color): Vehicle
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return Vehicle
     */
    public function setCurrentSpeed(int $currentSpeed): Vehicle
    {
        $this->currentSpeed = $currentSpeed;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     * @return Vehicle
     */
    public function setNbSeats(int $nbSeats): Vehicle
    {
        $this->nbSeats = $nbSeats;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     * @return Vehicle
     */
    public function setNbWheels(int $nbWheels): Vehicle
    {
        $this->nbWheels = $nbWheels;
        return $this;
    }

}