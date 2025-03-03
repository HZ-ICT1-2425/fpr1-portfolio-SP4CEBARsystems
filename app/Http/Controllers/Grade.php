<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Grade extends WeightedValue
{
    /**
     * Creates a new grade object that can be used to hold grades and calculate averages
     * @param float $grade the grade value
     * @param float $weight the grade's weight
     */
    public function __construct(float $grade, float $weight)
    {
        parent::__construct($grade, $weight);
    }

    /**
     * @return bool true if this is a passing grade
     */
    public function isPassed(): bool
    {
        return $this->value >= 5.5;
    }

    /**
     * @return float this grade
     */
    public function getGrade(): float
    {
        return $this->value;
    }

    /**
     * @return float this grade's weight
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
}
