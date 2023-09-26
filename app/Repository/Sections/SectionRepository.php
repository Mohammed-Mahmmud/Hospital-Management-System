<?php
namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\View\View;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SectionRepository implements SectionRepositoryInterface
{
    public function index(): string
    {
        // TODO: Implement index() method.
        return view('dashboard.sections.view');
    }
}
