<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
// use Tests\TestCase;
use App\Models\Year;
use App\Models\Quartile;
use App\Models\Course;
use App\Models\Exam;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YearTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_calculates_total_credits_earned()
    {
        $gradeManager = new Year(
            new Quartile(
                "Introduction to Computer Science",
                new Course(
                    "Program & Career Orientation",
                    2.5,
                    new Exam("Presentation (individual)", 10.0, 100.0)
                ),
                new Course(
                    "Computer Science Basics",
                    5.0,
                    new Exam("Written knowledge test", 9.8, 100.0)
                ),
            ),
            new Quartile(
                "Game Development",
                new Course(
                    "Object-Oriented Programming",
                    10.0,
                    new Exam("Group presentation", 5.0, 50.0),
                    new Exam("Written knowledge test", 10, 50.0)
                ),
            ),
        );

        $total = $gradeManager->getTotalCreditsEarned();

        $this->assertEquals(17.5, $total);
    }
}
