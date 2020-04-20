<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Contributor;

class ContributorRepository extends ModuleRepository
{
//    MISSED IN VIDEO make sure to include 'HandleTags' in the use statement below.
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleTags;

    public function __construct(Contributor $model)
    {
        $this->model = $model;
    }

    public function allContributors()
    {
        return $this->model
            ->published()
            ->orderBy('name')
            ->get();
    }

}
