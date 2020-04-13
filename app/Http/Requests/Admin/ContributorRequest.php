<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class ContributorRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [
            'email' => 'email',
            'twitter' => 'regex:/@([A-Za-z0-9_]{1,15})\b/i',
            'portfolio_link' => 'url',
            'linkedin' => 'url',
            'blocks' => 'validBlocks'
        ];
    }
}
