<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeManager extends Controller
{
    private array $courses = [];

    public function __construct(...$courses)
    {
        $this->courses = $courses;
    }

    public function addCourses(Course ...$courses): GradeManager
    {
        $this->courses = array_merge($this->courses, $courses);
        return $this;
    }

    public function getTotalCreditsEarned(): float
    {
        $totalCredits = 0;
        foreach ($this->courses as $course) {
            $totalCredits += $course->getCreditsEarned();
        }
        return $totalCredits;
    }

    public function saveGrades(): void
    {
        $_SESSION['courses'] = serialize($this->courses);
    }

    public function loadGrades(): void
    {
        if (isset($_SESSION['courses'])) {
            $this->courses = unserialize($_SESSION['courses']);
        }
    }
}
