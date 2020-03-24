@extends('twill::layouts.form')

@section('contentFields')
 
    @formField('input', [
        'name' => 'headline',
        'label' => 'Headline',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'url',
        'label' => 'Website URL',
        'placeholder' => 'http://www.website-project.com',
        'note' => 'Please enter full URL.',
        'maxlength' => 200
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Project description',
        'toolbarOptions' => [
        ['header' => [2, 3, false]],
            'bold',
            'italic',
            'blockquote',
            'link',
            'clean',
        ],
        'placeholder' => 'Description text',
        'maxlength' => 2200,
        'rows' => 10,
        'note' => 'Describe some of the challenges.',
    ])

        @formField('medias', [
            'name' => 'screengrab_desktop',
            'label' => 'Desktop',
            'note' => 'Shown at a desktop breakpoint.'
        ])

    




 @stop




























