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
        return $this->internetExplorerFallback(unserialize($config->typeCSS));
    }

    public function decodedFonts()
    {
        $config = SiteConfig::current_site_config();
        return json_encode(array_values(array_unique(json_decode($config->typeFonts))));
    }

    function internetExplorerFallback($css)
    {
        preg_match_all('/^\s*([^:]+)(:\s*(.+))?;\s*$/m', str_replace(';', ";\n", $css), $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            if (count($match) >= 4) {
                $orig = $match[0];
                $attr = trim($match[1]);
                $value = trim($match[3]);
                if (in_array($attr, ['color', 'background', 'background-color', '--primary-colour', '--secondary-colour'])) {
                    if (strstr($value, '#') && (strlen($value) > 7)) {
                        $newValue = substr($value, 0, -2);
                        $css = str_replace($orig, $attr . ': ' . $newValue . ';' . $orig, $css);
                    }
                }
            }
        }
        $css = preg_replace('/[\s\+]/', ' ', $css);
        return $css;
    }
}
