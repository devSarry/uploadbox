<?php namespace App\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\FormField;

class ImageType extends FormField {

    protected function getTemplate()
    {
        // At first it tries to load config variable,
        // and if fails falls back to loading view
        // resources/views/fields/datetime.blade.php
        return 'image';
    }

    public function render(array $options = [], $showLabel = false, $showField = true, $showError = false)
    {
        return parent::render($options, $showLabel, $showField, $showError);
    }
}
