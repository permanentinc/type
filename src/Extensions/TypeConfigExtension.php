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
        'typeCSS' => 's:967:".type h1{font-family:Montserrat;font-weight:300;font-size:48px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h2{font-family:Montserrat;font-weight:300;font-size:40px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h3{font-family:Montserrat;font-weight:300;font-size:32px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h4{font-family:Montserrat;font-weight:300;font-size:26px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h5{font-family:Montserrat;font-weight:300;font-size:24px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type h6{font-family:Montserrat;font-weight:300;font-size:20px;font-style:normal;color:#333;line-height:1.2;margin-bottom:15px}
.type p, .type li{font-family:Montserrat;font-weight:300;font-size:16px;font-style:normal;color:#333;line-height:1.6;margin-bottom:15px}
:root{--primary-colour:#377dff;--secondary-colour:#377dff}";',
        'typeJSON' => 'a:8:{s:8:".type h1";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"48px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h2";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"40px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h3";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"32px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h4";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"26px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h5";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"24px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:8:".type h6";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"20px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:4:"15px";}s:17:".type p, .type li";a:7:{s:11:"font-family";s:10:"Montserrat";s:11:"font-weight";s:3:"300";s:9:"font-size";s:4:"16px";s:10:"font-style";s:6:"normal";s:5:"color";s:4:"#333";s:11:"line-height";s:3:"1.6";s:13:"margin-bottom";s:4:"15px";}s:5:":root";a:2:{s:16:"--primary-colour";s:9:"#377dffff";s:18:"--secondary-colour";s:9:"#377dffff";}}',
    ];
}
