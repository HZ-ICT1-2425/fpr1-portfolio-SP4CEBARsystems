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

    // /** @test */
    // public function it_calculates_total_credits_earned()
    // {
    //     // Arrange: maak een jaar aan
    //     // $year = Year::factory()->create();

    //     // En drie courses, waarvan twee passed
    //     // Quartile::factory()->create([
    //     //     // 'year_id' => $year->id,
    //     //     // 'credits' => 5,
    //     //     // 'passed' => true,
    //     //     'name' => 1,
    //     //     'courses' => 1,
    //     // ]);

    //     // Quartile::factory()->create([
    //     //     'year_id' => $year->id,
    //     //     'credits' => 10,
    //     //     'passed' => true,
    //     // ]);

    //     // Quartile::factory()->create([
    //     //     'year_id' => $year->id,
    //     //     'credits' => 7,
    //     //     'passed' => false,
    //     // ]);

    //     // $course->getCreditsEarned();

    //     // Act: roep de methode aan
    //     $total = $gradeManager->getTotalCreditsEarned();

    //     // Assert: controleer of het totaal klopt (5 + 10)
    //     $this->assertEquals(17.5, $total);
    // }

    // /** @test */
    // public function it_sums_credits_from_quartiles()
    // {
    //     // Maak 3 mock quartiles aan
    //     $mockQuartile1 = $this->createMock(\stdClass::class);
    //     $mockQuartile1->method('getTotalCreditsEarned')->willReturn(10);

    //     $mockQuartile2 = $this->createMock(\stdClass::class);
    //     $mockQuartile2->method('getTotalCreditsEarned')->willReturn(7.5);

    //     $mockQuartile3 = $this->createMock(\stdClass::class);
    //     $mockQuartile3->method('getTotalCreditsEarned')->willReturn(2.5);

    //     // Mock het Year model (zonder database)
    //     $year = new Year();

    //     // Override de 'quartiles' relatie met een Collection van mocks
    //     $year->setRelation('quartiles', new Collection([
    //         $mockQuartile1,
    //         $mockQuartile2,
    //         $mockQuartile3,
    //     ]));

    //     $total = $year->getTotalCreditsEarned();

    //     $this->assertEquals(20.0, $total);
    // }
}
