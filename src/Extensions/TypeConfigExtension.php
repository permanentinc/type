<?php

namespace Permanentinc\Type\Extensions;


use SilverStripe\Core\Extension;

/**
 * TypeExtension
 */
class TypeConfigExtension extends Extension
{
    private static $db = [
        'typeCSS'   => 'Text',
        'typeJSON'  => 'Text',
        'typeFonts' => 'Text',
    ];
}
