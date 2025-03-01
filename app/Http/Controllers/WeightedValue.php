<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightedValue extends Controller
{
    public float $value;
    public float $weight;

    public function __construct(float $value, float $weight)
    {
        $this->value = $value;
        $this->weight = $weight;
    }

    public function addToWeightedAverage(WeightedValue $newValue): void
    {
        $this->weight += $newValue->weight;
        if ($this->weight == 0) {
            return;
        }
        $significance = $newValue->weight / $this->weight;
        $this->value += ($newValue->value - $this->value) * $significance;
    }
}
