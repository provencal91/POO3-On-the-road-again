<?php

require_once 'Vehicule.php';
class Car extends Vehicle
{
    //constante va te permettre de vérifier si, au moment où tu définis l'énergie, elle est bien d'une de ces deux valeurs.//
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $currentSpeed)
    {
        // appeler le constructeur du parent et lui donner les paramètres dont il a besoin //
        parent::__construct($color, $nbSeats, $currentSpeed);
        $this->setEnergy($energy); //=$this->energy = $energy;
    }

    public function start(){
        echo 'Vroomm!!!';
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        // vérifie si l'énergie passée en paramètre de la méthode est bien dans le tableau de la constante ALLOWED_ENERGIES//
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}

