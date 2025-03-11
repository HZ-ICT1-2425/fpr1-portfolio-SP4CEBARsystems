<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function __construct(string $name = '', float $grade = 0, float $weight = 0)
    {
        parent::__construct($grade, $weight);
        $this->name = $name;
    }
}
