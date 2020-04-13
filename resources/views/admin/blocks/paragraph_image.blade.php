@formField('medias', [
    'name' => 'variable_image',
    'label' => 'Image',
])

@formField('select', [
        'name' => 'variable_image_alignment',
        'label' => 'Image Alignment',
        'unpack' => true,
        'options' => [
            [
                'value' => 'md:float-left pr-5',
                'label' => 'Left'
            ],
            [
                'value' => 'md:float-right pl-5',
                'label' => 'Right'
            ],
        ]
    ])

      @formField('select', [
        'name' => 'variable_image_width_desktop',
        'label' => 'Width on Desktop',
        'options' => [
        [ 'value' => 'lg:w-3/12' , 'label' => '25%' ],
        [ 'value' => 'lg:w-4/12' , 'label' => '33%' ],
        [ 'value' => 'lg:w-6/12' , 'label' => '50%' ],
        [ 'value' => 'lg:w-8/12' , 'label' => '66%' ],
        [ 'value' => 'lg:w-9/12' , 'label' => '75%' ],
        [ 'value' => 'lg:w-full' , 'label' => '100%' ],
        ]
    ])

      @formField('select', [
        'name' => 'variable_image_width_tablet',
        'label' => 'Width on Tablet',
        'options' => [
        [ 'value' => 'md:w-3/12' , 'label' => '25%' ],
        [ 'value' => 'md:w-4/12' , 'label' => '33%' ],
        [ 'value' => 'md:w-6/12' , 'label' => '50%' ],
        [ 'value' => 'md:w-8/12' , 'label' => '66%' ],
        [ 'value' => 'md:w-9/12' , 'label' => '75%' ],
        [ 'value' => 'md:w-full' , 'label' => '100%' ],
        ]
    ])


@formField('wysiwyg', [
    'name' => 'paragraph',
    'type' => 'textarea',
    'toolbarOptions' => [
        'bold',
        'italic',
        'link',
        'clean',
    ],
    'label' => 'Paragraph',
    'rows' => 4
])

