@formField('input', [
'name' => 'project_title',
'label' => 'Project Title',
'maxlength' => 200
])

@formField('input', [
'name' => 'project_url',
'label' => 'Project Url',
'maxlength' => 200
])

@formField('medias', [
'name' => 'past_project_image',
'label' => 'Image',
])

@formField('wysiwyg', [
'name' => 'project_description',
'label' => 'Project description',
'toolbarOptions' => [
'bold',
'italic',
'link',
'clean',
],
'placeholder' => 'Briefly describe this project as well as your role.',
'maxlength' => 235,
'rows' => 5,
'note' => 'Describe the project.',
])
