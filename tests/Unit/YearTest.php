<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
// use Tests\TestCase;
use App\Models\Year;
use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YearTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_calculates_total_credits_earned()
    {
        // Arrange: maak een jaar aan
        $year = Year::factory()->create();

        // En drie courses, waarvan twee passed
        Course::factory()->create([
            'year_id' => $year->id,
            'credits' => 5,
            'passed' => true,
        ]);

        Course::factory()->create([
            'year_id' => $year->id,
            'credits' => 10,
            'passed' => true,
        ]);

        Course::factory()->create([
            'year_id' => $year->id,
            'credits' => 7,
            'passed' => false,
        ]);

        // Act: roep de methode aan
        $total = $year->getTotalCreditsEarned();

        // Assert: controleer of het totaal klopt (5 + 10)
        $this->assertEquals(15, $total);
    }
}
