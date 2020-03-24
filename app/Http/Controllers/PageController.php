<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class PageController extends Controller
{
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function homepage()
    {
        return view('pages.homepage', [
            'projects' => $this->projectRepository->allProjects()
        ]);
    }
}
