<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Project extends Model
{
    use HasSlug, HasMedias;

    protected $fillable = ['published',
        'title',
        'description',
        'headline',
        'url',
        'sector',
        'commercial',
        'launch_date',
        'layout'];

    public $slugAttributes = ['title'];

    public $mediasParams = [
        'screengrab_desktop' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 12 / 9
                ]
            ]
        ],
        'screengrab_tablet' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 765 / 1024
                ]
            ]
        ],
        'screengrab_phone' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 375 / 667
                ]
            ]
        ]
    ];

    //----------- Relationships

    public function credit()
    {
        return $this->hasMany(Credit::class)->orderBy('position');
    }


    //----------- Mutators & Accessors

    public function getDomainAttribute($value)
    {
        return parse_url($this->url)['host'];
    }
}
