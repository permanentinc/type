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

    private static $defaults = [
        'typeCSS' => 's:1071:"#type h1{font-family:Montserrat;font-weight:300;font-size:60px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:0.9}
        #type h2{font-family:Montserrat;font-weight:300;font-size:50px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.0}
        #type h3{font-family:Montserrat;font-weight:300;font-size:36px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.1}
        #type h4{font-family:Montserrat;font-weight:300;font-size:30px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.2}
        #type h5{font-family:Montserrat;font-weight:300;font-size:24px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.2}
        #type h6{font-family:Montserrat;font-weight:300;font-size:20px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.2}
        p, b, li, strong{font-family:Montserrat;font-weight:300;font-size:16px;font-style:normal;color:#333;background:#fffff;text-align:left;line-height:1.2}
        :root{--primary-colour:#377dffff;--secondary-colour:#000000ff}";',
        'typeJSON' => 'a:8:{s:8:"#type h1";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"60px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"0.9";}s:8:"#type h2";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"50px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.0";}s:8:"#type h3";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"36px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.1";}s:8:"#type h4";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"30px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.2";}s:8:"#type h5";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"24px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.2";}s:8:"#type h6";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"20px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.2";}s:16:"p, b, li, strong";a:8:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"16px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:10:"background";s:6:"#fffff";s:10:"text-align";s:4:"left";s:11:"line-height";s:3:"1.2";}s:5:":root";a:2:{s:16:"--primary-colour";s:9:"#377dffff";s:18:"--secondary-colour";s:9:"#000000ff";}}',
    ];
}
