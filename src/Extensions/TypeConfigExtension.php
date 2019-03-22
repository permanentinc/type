<?php

namespace Permanentinc\Type\Extensions;


use SilverStripe\Core\Extension;

/**
 * TypeExtension
 */
class TypeConfigExtension extends Extension
{
    private static $db = [
        'typeCSS' => 'HTMLText',
        'typeJSON' => 'HTMLText',
    ];
}
