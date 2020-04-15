<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Credit extends Model implements Sortable
{
    use HasPosition;

    protected $fillable = [
        'published',
        'title',
        'project_id',
        'position',
    ];

    //----------- Relationships

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function contributors()
    {
        return $this->belongsToMany(Contributor::class)->orderBy('position');
    }
    
}
