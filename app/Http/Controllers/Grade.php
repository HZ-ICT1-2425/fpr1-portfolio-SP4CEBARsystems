<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Grade extends WeightedValue
{
    public function __construct(float $grade, float $weight)
    {
        parent::__construct($grade, $weight);
    }

    public function isPassed(): bool
    {
        return $this->value >= 5.5;
    }

    public function getGrade(): float {
        return $this->value;
    }

    public function getWeight(): float {
        return $this->weight;
    }
}

