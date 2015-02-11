<?php namespace Distilleries\FormBuilder\Fields;

class Tinymce extends FormFieldsView {

    protected function getTemplate()
    {
        return 'tinymce';
    }

    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
         return parent::render($options, $showLabel, $showField, $showError);
    }
} 