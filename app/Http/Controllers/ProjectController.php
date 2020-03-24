<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('project.index', [
            'projects' => $this->repository->allProjects()
        ]);
    }

    public function show($slug)
    {
        $project = $this->repository->forSlug($slug);
        abort_unless($project, 404, 'Project ');

        return view('project.show', compact('project'));
    }
}
