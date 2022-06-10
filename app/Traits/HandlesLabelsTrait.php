<?php

namespace App\Traits;

trait HandlesLabelsTrait
{
    
    public static function getLabel(string $label): string
    {
        return parent::getLabels()[$label] ?? '';
    }

    public static function getRequiredLabelHtml()
    {
    	return '<sup class="label--required">*</sup>';
    }

}