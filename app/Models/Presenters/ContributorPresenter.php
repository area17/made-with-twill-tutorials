<?php

namespace App\Models\Presenters;

class ContributorPresenter extends Presenter
{
    public function tagsAsString()
    {
        return $this->tags->map(function ($tag) {
                return $tag->name;
            })->implode(', ');
    }

}
