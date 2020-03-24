<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    public function allProjects()
    {
    	return $this->model
            ->published()
            ->orderBy('title')
            ->get();                            	    	
    }    



}
