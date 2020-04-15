<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\Handletags;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleTags;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    public function prepareFieldsBeforeCreate($fields)
    {
        $fields['layout'] = 'regular';
        return parent::prepareFieldsBeforeCreate($fields);
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'credit', 'Credit');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'credit', 'Credit');
        return $fields;
    }

    public function allProjects()
    {
        return $this->model
            ->published()
            ->orderBy('title')
            ->get();
    }
}
