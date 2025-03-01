<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exam extends Grade
{
    public string $name;
    public function __construct(string $name, float $grade, float $weight)
    {
        parent::__construct($grade, $weight);
        $this->name = $name;
    }
}
