<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    private array $quartiles = [];

    /**
     * Creates a new year object that holds quartiles
     * @param Quartile ...$quartiles in this year
     */
    public function __construct(Quartile ...$quartiles)
    {
        parent::__construct();
        $this->quartiles = $quartiles;
    }

    /**
     * @param Quartile ...$quartiles
     * @return $this
     */
    public function addQuartiles(Quartile ...$quartiles): Year
    {
        $this->quartiles = array_merge($this->quartiles, $quartiles);
        return $this;
    }

    /**
     * @return array
     */
    public function getQuartiles(): array
    {
        return $this->quartiles;
    }

    /**
     * @return float the number of credits earned by all the quartiles within this year
     */
    public function getTotalCreditsEarned(): float
    {
        $totalCredits = 0;
        foreach ($this->quartiles as $quartile) {
            $totalCredits += $quartile->getTotalCreditsEarned();
        }
        return $totalCredits;
    }
}
