<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartile extends Model
{
    public string $name;
    private array $courses = [];

    /**
     * Creates a new quartile that holds courses
     * @param string $name of the quartile
     * @param Course ...$courses within this quartile
     */
    public function __construct(string $name, Course ...$courses)
    {
        parent::__construct();
        $this->name = $name;
        $this->courses = $courses;
    }

    /**
     * @param Course ...$courses
     * @return Quartile
     */
    public function addCourses(Course ...$courses): Quartile
    {
        $this->courses = array_merge($this->courses, $courses);
        return $this;
    }

    /**
     * @return array all courses within this quartile
     */
    public function getCourses(): array
    {
        return $this->courses;
    }

    /**
     * @return float the number of credits earned in this quartile
     */
    public function getTotalCreditsEarned(): float
    {
        $totalCredits = 0;
        foreach ($this->courses as $course) {
            $totalCredits += $course->getCreditsEarned();
        }
        return $totalCredits;
    }
}
