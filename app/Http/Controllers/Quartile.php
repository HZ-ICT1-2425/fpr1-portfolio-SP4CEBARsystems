<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Quartile extends Controller
{
    public string $name;
    private array $courses = [];

    public function __construct($name, ...$courses)
    {
        $this->name = $name;
        $this->courses = $courses;
    }

    public function addCourses(Course ...$courses): GradeManager
    {
        $this->courses = array_merge($this->courses, $courses);
        return $this;
    }
    public function getCourses(): array
    {
        return $this->courses;
    }

    public function getTotalCreditsEarned(): float
    {
        $totalCredits = 0;
        foreach ($this->courses as $course) {
            $totalCredits += $course->getCreditsEarned();
        }
        return $totalCredits;
    }
}
