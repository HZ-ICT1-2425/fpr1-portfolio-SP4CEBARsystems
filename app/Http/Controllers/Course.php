<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Course extends Controller
{
    public string $name;
    private float $credits;
    private array $grades = [];

    public function __construct($name, float $credits, ...$grades)
    {
        $this->name = $name;
        $this->credits = $credits;
        $this->grades = $grades;
    }

    public function addGrades(Grade ...$grades): Course
    {
        $this->grades = array_merge($this->grades, $grades);
        return $this;
    }

    function sum(...$numbers) {
        $acc = 0;
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
    }

    public function getCourseGrade(): Grade
    {
        $averageGrade = new Grade(0, 0);

        foreach ($this->grades as $grade) {
            $averageGrade->addToWeightedAverage($grade);
        }

        return $averageGrade;
    }

    public function isPassed(): bool
    {
        return $this->getCourseGrade()->isPassed();
    }

    public function getCreditsEarned(): float
    {
        return $this->isPassed() ? $this->credits : 0;
    }
}
