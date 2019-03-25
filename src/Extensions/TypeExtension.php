<?php

namespace Permanentinc\Type\Extensions;


use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\ArrayData;
use SilverStripe\ORM\ArrayList;

/**
 * TypeExtension
 */
class TypeExtension extends Extension
{
    private static $db = [
        'typeCSS' => 'HTMLText',
        'typeJSON' => 'HTMLText',
    ];

    private static $tags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p'];

    private static $styles = ['font-family', 'color', 'font-size', 'font-weight', 'font-style', 'text-align', 'line-height', 'letter-spacing'];

    public function getTags()
    {
        return  new ArrayList([
            new ArrayData(['Selector' => 'h1', 'Name' => 'Heading 1']),
            new ArrayData(['Selector' => 'h2', 'Name' => 'Heading 2']),
            new ArrayData(['Selector' => 'h3', 'Name' => 'Heading 3']),
            new ArrayData(['Selector' => 'h4', 'Name' => 'Heading 4']),
            new ArrayData(['Selector' => 'h5', 'Name' => 'Heading 5']),
            new ArrayData(['Selector' => 'h6', 'Name' => 'Heading 6']),
            new ArrayData(['Selector' => 'p', 'Name' => 'Paragraph'])
        ]);
    }

}
