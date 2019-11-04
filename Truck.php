<?php
require_once 'Vehicule.php';
class Truck extends Vehicle
{
    const ALLOWED_LEVEL = [
        'full',
        'in filling',
    ];
    /**
     * @var string
     */
    private $level;
    /**
     * @var bool
     */
    private $stockage;

    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, string $level, int $stockage, int $currentSpeed)
    {
        // appeler le constructeur du parent et lui donner les paramètres dont il a besoin //
        parent::__construct($color, $nbSeats, $currentSpeed);
        $this->setEnergy($energy);
        $this->setLevel($level);
        $this->setStockage($stockage);
    }

    public function start(){
        echo 'Vroomm!!!';
    }
    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }
    /**
     * @param string $level
     * @return Truck
     */
    public function setLevel(string $level): Truck
    {
        if (in_array($level, self::ALLOWED_LEVEL)) {
            $this->level = $level;
        }
        return $this;
    }
    /**
     * @return bool
     */
    public function getStockage(): int
    {
        return $this->stockage;
    }
    /**
     * @param bool $stockage
     * @return Truck
     */
    public function setStockage(int $stockage): Truck
    {
        $this->stockage = $stockage;
        return $this;
    }
    public function getEnergy(): string{
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }
}