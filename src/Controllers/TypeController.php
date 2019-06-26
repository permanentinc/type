<?php

namespace Permanentinc\Type\Controllers;

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
use SilverStripe\SiteConfig\SiteConfig;

class TypeController extends Controller
{
    private static $allowed_actions = [
        'save',
        'load'
    ];

    public function getStandardJsonResponse($data, $method = 'json', $message = '', $code = 200, $status = 'success')
    {
        $elapsed = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

        $responseData = [
            'request' => $this->getRequest()->httpMethod(),
            'status'  => $status,
            'method'  => $method,
            'elapsed' => number_format($elapsed * 1000, 0) . 'ms',
            'message' => $message,
            'code'    => $code,
            'data'    => $data
        ];

        $response = new HTTPResponse();
        $response->setStatusCode($code);
        $response->setBody(json_encode($responseData));
        $response->addHeader("Content-type", "application/json");

        return $response;
    }

    public function save(HTTPRequest $request)
    {
        $siteConfig = SiteConfig::current_site_config();
        $siteConfig->setField('typeCSS', json_encode($request->postVar('css')));
        $siteConfig->setField('typeJSON', json_encode($request->postVar('json')));
        $siteConfig->setField('typeFonts', json_encode($request->postVar('fonts')));
        $siteConfig->write();
    }

    public function load(HTTPRequest $request)
    {
        $siteConfig = SiteConfig::current_site_config();
        return json_encode(json_decode($siteConfig->getField('typeJSON')));
    }
}
