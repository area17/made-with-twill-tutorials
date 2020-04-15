<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Credit;

class CreditRepository extends ModuleRepository
{
    

    public function __construct(Credit $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateBrowser($object, $fields, 'contributors');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields['browsers']['contributors'] = $this->getFormFieldsForBrowser($object, 'contributors');

        return $fields;
    }
    
}
