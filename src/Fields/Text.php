<?php

namespace Pandorga\Laramie\Fields;

use Spatie\Html\Elements\A;

class Text extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'text-field';

    /**
     * The meta data for the element.
     *
     * @var array
     */
    public $meta = [
        'extraAttributes' => [
            'class' => 'form-control',
        ],
    ];

    public function linkable()
    {
    	return $this->displayUsing(function ($item, $value) {
            return html()->a(resource('show', $item->id))->text($value);
        });
    }
}
