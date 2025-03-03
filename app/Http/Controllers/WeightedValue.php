<?php

namespace App\Http\Controllers;


class WeightedValue extends Controller
{
    protected float $value;
    protected float $weight;

    /**
     * Creates a new weighted value. It can be used to hold, maintain averages, or to add values or averages together
     * into a new average
     * @param float $value numeric value
     * @param float $weight the weight of the value
     */
    public function __construct(float $value, float $weight)
    {
        $this->value = $value;
        $this->weight = $weight;
    }

    /**
     * Expands an average value with a new value or another average value, this method can handle averages without
     * needing a sum value that is prone to overflowing.
     * @param WeightedValue $newValue will be added to the average
     * @return void
     */
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
