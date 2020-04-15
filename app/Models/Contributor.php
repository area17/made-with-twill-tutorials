<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use App\Models\Presenters\ContributorPresenter;
use A17\Twill\Models\Model;

class Contributor extends Model
{
    use HasBlocks, HasSlug, HasMedias, HasFiles;

    public $presenterAdmin = ContributorPresenter::class;

    protected $fillable = ['name',
        'email',
        'twitter',
        'portfolio_link',
        'linkedin'];

    public $slugAttributes = ['name'];

    public $filesParams = ['resume'];

    public $mediasParams = [
        'avatar' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1
                ]
            ]
        ]
    ];

//----------- Relationships

    public function credits()
    {
        return $this->belongsToMany(Credit::class);
    }

}
