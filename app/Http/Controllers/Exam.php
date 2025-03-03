<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exam extends Grade
{
    public string $name;

    /**
     * Creates a new exam object that can be used to hold an exam and grade information, it can also be used to average
     * grades.
     * @param string $name of the exam
     * @param float $grade of the exam
     * @param float $weight of the exam's grade
     */
    public function __construct(string $name, float $grade, float $weight)
    {
        parent::__construct($grade, $weight);
        $this->name = $name;
    }
}
