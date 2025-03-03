<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * @return View
     */
    public function dashboard(): View
    {
        $gradeManager = $this->getCourses();
//        dd($gradeManager);
//        echo "Total Credits Earned: " . $gradeManager->getTotalCreditsEarned();
        return view('dashboard', ['gradeManager' => $gradeManager]);
    }

    /**
     * @return Year
     */
    private function getCourses(): Year
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
                new Course(
                    "Programming Basics",
                    5.0,
                    new Exam("Case test", 9.3, 100.0)
                ),
                new Course(
                    "Personal Professional Development Exploration",
                    12.5,
                    new Exam("Criterion-focused interview", 1.0, 100.0)
                )
            ),
            new Quartile(
                "Game Development",
                new Course(
                    "Object-Oriented Programming",
                    10.0,
                    new Exam("Group presentation", 5.9, 50.0),
                    new Exam("Written knowledge test", 9.9, 50.0)
                )
            ),
            new Quartile(
                "Modern Software Development 1",
                new Course(
                    "Framework Project 1",
                    10.0,
                    new Exam("On-site case test", 1.0, 40.0),
                    new Exam("Database exam", 1.0, 10.0),
                    new Exam("Group presentation project results", 1.0, 25.0),
                    new Exam("Group portfolio on requirements", 1.0, 25.0)
                ),
                new Course(
                    "Business IT Consultancy Basics",
                    2.5,
                    new Exam("Video", 1.0, 100.0)
                )
            ),
            new Quartile(
                "Modern Software Development 2",
                new Course(
                    "Framework Project 2",
                    10.0,
                    new Exam("Final delivery", 1.0, 25.0),
                    new Exam("Individual project assessment", 1.0, 25.0),
                    new Exam("IT development portfolio", 1.0, 50.0)
                )
            )
        );
        $gradeManager->saveGrades();
        return $gradeManager;
    }
}
