<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Course extends Controller
{
    public string $name;
    public float $credits;
    private array $exams = [];

    public function __construct($name, float $credits, ...$exams)
    {
        $this->name = $name;
        $this->credits = $credits;
        $this->exams = $exams;
    }

    public function addExams(Grade ...$exams): Course
    {
        $this->exams = array_merge($this->exams, $exams);
        return $this;
    }
    public function getExams(): array
    {
        return $this->exams;
    }

    public function getCourseGrade(): Grade
    {
        $averageGrade = new Grade(0, 0);

        foreach ($this->exams as $grade) {
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
