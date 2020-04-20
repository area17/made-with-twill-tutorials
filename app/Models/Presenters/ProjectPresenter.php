<?php

namespace App\Models\Presenters;

class ProjectPresenter extends Presenter
{
    public function creditsFormatted()
    {
        $creditList = [];

        foreach ($this->credit as $credit) {
            $linksList = [];

            foreach ($credit->contributors as $contributor) {
                $linksList[] = '<a class="text-twill-purple" href="/contributors/' . $contributor->slug . '">' . $contributor->name . '</a>';
            }
            $plural = count($linksList) > 1 ? 's' : '';
            $listString = implode(', ', $linksList);
            $listString = preg_replace('~(.*)' . preg_quote(', ', '~') . '~', '$1' . ' &amp; ', $listString, 1);

            $creditList[] = ['roleTitle' => $credit->title.$plural, 'contributorList' => $listString];
        }

        return $creditList;
    }
}
