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
        'typeCSS'   => 'HTMLText',
        'typeJSON'  => 'HTMLText',
        'typeFonts' => 'HTMLText',
    ];

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

    public function decodedTypeCSS()
    {
        $config = SiteConfig::current_site_config();
        return unserialize($config->typeCSS);
    }
   
    public function decodedFonts()
    {
        $config = SiteConfig::current_site_config();
        var_dump($config->typeFonts);
        return $config->typeFonts;
    }
}
