<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeManager extends Controller
{
    private array $quartiles = [];

    public function __construct(...$quartiles)
    {
        $this->quartiles = $quartiles;
    }

    public function addQuartiles(Quartile ...$quartiles): GradeManager
    {
        $this->quartiles = array_merge($this->quartiles, $quartiles);
        return $this;
    }

    public function getQuartiles(): array
    {
        return $this->quartiles;
    }

    public function getTotalCreditsEarned(): float
    {
        $totalCredits = 0;
        foreach ($this->quartiles as $quartile) {
            $totalCredits += $quartile->getTotalCreditsEarned();
        }
        return $totalCredits;
    }

    public function saveGrades(): void
    {
        $_SESSION['quartiles'] = serialize($this->quartiles);
    }

    public function loadGrades(): void
    {
        if (isset($_SESSION['quartiles'])) {
            $this->quartiles = unserialize($_SESSION['quartiles']);
        }
    }
}
