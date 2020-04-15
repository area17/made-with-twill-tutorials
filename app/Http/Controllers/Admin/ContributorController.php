<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ContributorController extends ModuleController
{
    protected $moduleName = 'contributors';

    protected $titleColumnKey = 'name';

        protected $indexColumns = [
        'image' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'avatar',
                'crop' => 'default'
            ]
        ],

        'name' => [
            // field column
            'title' => 'Name',
            'field' => 'name',
            'sort' => true
        ],

        'tagsAsString' => [
            'title' => 'Tags',
            'field' => 'tagsAsString',
            'present' => true
        ]
    ];
}
