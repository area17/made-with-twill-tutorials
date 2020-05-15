<?php

namespace App\Http\Controllers;

use App\Repositories\ContributorRepository;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function __construct(ContributorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('contributor.index', [
            'contributors' => $this->repository->allContributors()
        ]);
    }

    public function show($slug)
    {
        $contributor = $this->repository->forSlug($slug);
        abort_unless($contributor, 404, 'Contributor ');
        return view('contributor.show', compact('contributor'));
    }

}
