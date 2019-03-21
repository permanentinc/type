<?php

namespace permanentinc\type\extensions;

use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\ArrayData;
use SilverStripe\ORM\ArrayList;

/**
 * TypeExtension
 */
class TypeExtension extends Extension
{

    private static $allowed_actions = [
        'texter',
        'SaveCSS',
        'SaveJS',
        'SaveTypeSettings',
        'LoadTypeSettings',
        'getCart'
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


    public function LoadTypeSettings(SS_HTTPRequest $request)
    {
        $data = [];
        $siteConfig = SiteConfig::current_site_config();

        foreach (self::$tags as $tag) {
            foreach (self::$styles as $style) {
                $field = $tag . preg_replace('/-/', '', $style);
                $data[$tag]['attributes'][$style] = $siteConfig->getField($field);
            }
        }

        return json_encode($data, true);
    }

    public function SaveCSS(SS_HTTPRequest $request)
    {
        $data = $request->postVars();
        $siteConfig = SiteConfig::current_site_config();
        $siteConfig->setField('TypeSettingsCSS', $data['css']);
        $siteConfig->write();
        return json_encode($data['css'], true);
    }

    public function SaveJS(SS_HTTPRequest $request)
    {
        $data = $request->postVars();
        $siteConfig = SiteConfig::current_site_config();
        $siteConfig->setField('TypeSettingsJS', $data['js']);
        $siteConfig->write();
        return json_encode($data['js'], true);
    }

    public function SaveTypeSettings(SS_HTTPRequest $request)
    {
        $data = $request->postVars();

        $siteConfig = SiteConfig::current_site_config();

        foreach (self::$tags as $tag) {
            foreach (self::$styles as $style) {
                $field = $tag . preg_replace('/-/', '', $style);
                if ($tag != 'li') {
                    $value = $data['styles'][$tag]['attributes'][$style];
                    $siteConfig->setField($field, preg_replace(['/px/', '/rem/'], '', $value));
                }
            }
        }

        $siteConfig->write();

        return json_encode('good', true);
    }
}
