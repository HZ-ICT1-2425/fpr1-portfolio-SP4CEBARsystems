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
     * @return GradeManager
     */
    private function getCourses(): GradeManager
    {
        $gradeManager = new GradeManager(
            new Course(
                3,
                new Grade(6.0, 1.0),
                new Grade(7.0, 1.5)
            ),
            new Course(
                4,
                new Grade(5.0, 1.0),
                new Grade(8.0, 1.2)
            )
        );
        $gradeManager->saveGrades();
        return $gradeManager;
    }
}
