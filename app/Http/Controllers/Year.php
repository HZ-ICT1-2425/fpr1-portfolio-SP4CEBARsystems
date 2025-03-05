<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Year extends Controller
{
    private array $quartiles = [];

    /**
     * Creates a new year object that holds quartiles
     * @param Quartile ...$quartiles in this year
     */
    public function __construct(Quartile ...$quartiles)
    {
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

    /**
     * @return void
     */
    public function saveGrades(): void
    {
        $_SESSION['quartiles'] = serialize($this->quartiles);
    }

    /**
     * @return void
     */
    public function loadGrades(): void
    {
        if (isset($_SESSION['quartiles'])) {
            $this->quartiles = unserialize($_SESSION['quartiles']);
        }
    }
}
