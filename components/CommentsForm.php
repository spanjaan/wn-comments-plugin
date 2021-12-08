<?php

namespace Dimsog\Comments\Components;

use Cms\Classes\ComponentBase;

class CommentsForm extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name'        => 'dimsog.comments::lang.components.commentsForm.name',
            'description' => 'dimsog.comments::lang.components.commentsForm.description'
        ];
    }

    public function onRender()
    {
        $this->page['properties'] = $this->properties;
    }

    public function defineProperties(): array
    {
        return [
            'url' => [
                'title' => 'dimsog.comments::lang.components.commentsForm.properties.url',
                'type' => 'string',
                'required' => true
            ],
            'email' => [
                'title' => 'dimsog.comments::lang.components.commentsForm.properties.email',
                'type' => 'checkbox',
                'default' => true
            ]
        ];
    }
}
