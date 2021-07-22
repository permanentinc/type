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
        'typeCSS' => 's:1154:".type h1{font-family:Montserrat;font-weight:600;font-size:46.0px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h2{font-family:Montserrat;font-weight:600;font-size:38.0px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h3{font-family:Montserrat;font-weight:600;font-size:32px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h4{font-family:Montserrat;font-weight:600;font-size:26px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h5{font-family:Montserrat;font-weight:600;font-size:24px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h6{font-family:Montserrat;font-weight:600;font-size:20px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type, .type li, .type p, .notyf, .type label, .type input{font-family:Montserrat;font-weight:400;font-size:16.0px;font-style:normal;color:#5e5e5e;line-height:1.6;margin-bottom:15px}
.type .nav, .type nav{font-family:Montserrat;font-weight:500;font-size:16px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
:root{--primary-colour:#377dff;--secondary-colour:#4363a1}";',
        'typeJSON' => 'a:9:{s:8:".type h1";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:6:"46.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h2";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:6:"38.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h3";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:4:"32px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h4";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:4:"26px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h5";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:4:"24px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h6";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"600";s:9:"font-size";s:4:"20px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:58:".type, .type li, .type p, .notyf, .type label, .type input";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"400";s:9:"font-size";s:6:"16.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#5e5e5e";s:11:"line-height";s:3:"1.6";s:13:"margin-bottom";s:4:"15px";}s:21:".type .nav, .type nav";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"500";s:9:"font-size";s:4:"16px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:5:":root";a:2:{s:16:"--primary-colour";s:7:"#377dff";s:18:"--secondary-colour";s:7:"#4363a1";}}',
    ];
}
