<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public string $name;
    public float $credits;
    private array $exams;

    /**
     * Constructs a new course object
     * @param string $name of the course
     * @param float $credits that will be earned for passing the course
     * @param Exam ...$exams within the course
     */
    public function __construct(string $name = '', float $credits = 0, Exam ...$exams)
    {
        parent::__construct();
        $this->name = $name;
        $this->credits = $credits;
        $this->exams = $exams;
    }

    /**
     * @param Exam ...$exams
     * @return $this
     */
    public function addExams(Exam ...$exams): Course
    {
        $this->exams = array_merge($this->exams, $exams);
        return $this;
    }

    /**
     * @return array all exams within this course
     */
    public function getExams(): array
    {
        return $this->exams;
    }

    /**
     * @return Grade average grade of all exams within this course
     */
    public function getCourseGrade(): Grade
    {
        $averageGrade = new Grade(0, 0);

        foreach ($this->exams as $grade) {
            $averageGrade->addToWeightedAverage($grade);
        }

        return $averageGrade;
    }

    /**
     * @return bool true if this course was passed
     */
    public function isPassed(): bool
    {
        return $this->getCourseGrade()->isPassed();
    }

    /**
     * @return float the number of credits earned by this course depending on whether this course was passed
     */
    public function getCreditsEarned(): float
    {
        return $this->isPassed() ? $this->credits : 0;
    }
}
