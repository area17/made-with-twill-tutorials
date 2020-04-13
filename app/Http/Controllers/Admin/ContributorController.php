<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ContributorController extends ModuleController
{
    protected $moduleName = 'contributors';

    protected $titleColumnKey = 'name';
}
