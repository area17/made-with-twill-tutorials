<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Project extends Model 
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'headline',
        'url',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'screengrab_desktop' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 12 / 9,
                ],
            ],
        ],                                                                                                            
    ];

//----------- Mutators & Accessors

    public function getDomainAttribute( $value )    
    {
        return parse_url($this->url)['host'];    
    }



}



