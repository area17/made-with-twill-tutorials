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

    @formField('select', [
    'name' => 'sector',
    'label' => 'Sector',
    'placeholder' => 'Select a sector',
    'note' => 'What industry, business or hobby was the site intended?',
    'options' => [
    [ 'value' => 1 , 'label' => 'Arts & Entertainment' ],
    [ 'value' => 2 , 'label' => 'Business to Business' ],
    [ 'value' => 3 , 'label' => 'Design' ],
    [ 'value' => 4 , 'label' => 'Education' ],
    [ 'value' => 5 , 'label' => 'Hospitality & Leisure' ],
    [ 'value' => 6 , 'label' => 'Portfolio' ],
    [ 'value' => 7 , 'label' => 'Public Sector & Charity' ],
    [ 'value' => 8 , 'label' => 'Retail & Ecommerce' ],
    [ 'value' => 9 , 'label' => 'Schools & Education' ],
    [ 'value' => 10 , 'label' => 'Technology' ]
    ]
    ])

    @formField('checkbox', [
    'name' => 'commercial',
    'label' => 'Commercial: Was it a paid project?',
    ])

    @formField('date_picker', [
    'name' => 'launch_date',
    'label' => 'Launch Date',
    'withTime' => false,
    'minDate' => '2016-12-16 12:00',
    'maxDate' => '2025-12-31 12:00'
    ])

    @formField('select', [
    'name' => 'layout',
    'label' => 'Layout',
    'note' => 'Which page layout is best for this kind of project?',
    'unpack' => true,
    'options' => [
    [
    'value' => 'regular',
    'label' => 'Even Balance'
    ],
    [
    'value' => 'text_heavy',
    'label' => 'Text Heavy'
    ],
    [
    'value' => 'image_heavy',
    'label' => 'Image Heavy'
    ],
    ]
    ])

    @formField('tags')
    <span class="f--small">Words to describe the look of the website.</span>

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

@stop

@section('fieldsets')
    <a17-fieldset id="screengrabs" title="Website Screengrabs" :open="true">
        @formField('medias', [
        'name' => 'screengrab_desktop',
        'label' => 'Desktop',
        'note' => 'Shown at a desktop breakpoint.'
        ])

        @formField('medias', [
        'name' => 'screengrab_tablet',
        'label' => 'Tablet',
        'note' => 'Shown at a tablet breakpoint.'
        ])

        @formField('medias', [
        'name' => 'screengrab_phone',
        'label' => 'Smartphone',
        'note' => 'Shown at a smartphone breakpoint.'
        ])

    </a17-fieldset>

    <a17-fieldset title="Credits" id="credits" :open="true">
        @formField('repeater', ['type' => 'credit'])
    </a17-fieldset>
@endsection

