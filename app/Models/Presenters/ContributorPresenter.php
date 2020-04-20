<?php

namespace App\Models\Presenters;

class ContributorPresenter extends Presenter
{
    public function tagsAsString()
    {
        return $this->tags
            ->map(function ($tag) {
                return $tag->name;
            })
            ->implode(', ');
    }

    public function projectsFormatted()
    {
        $creditList = [];

        foreach ($this->credits as $credit) {
            $creditList[] =
                '<strong>' . $credit->title . '</strong>  - <a class="text-twill-purple" href="/projects/' . $credit->project->slug . '">' . $credit->project->title . '</a>';
        }

        return $creditList;
    }
}
