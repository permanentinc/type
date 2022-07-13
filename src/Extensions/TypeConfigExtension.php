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
        'typeCSS' => 's:1053:".type h1{font-family:Lexend;font-weight:400;font-size:46.0px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type h2{font-family:Lexend;font-weight:400;font-size:38.0px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type h3{font-family:Lexend;font-weight:400;font-size:32px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type h4{font-family:Lexend;font-weight:400;font-size:26px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type h5{font-family:Lexend;font-weight:400;font-size:24px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type h6{font-family:Lexend;font-weight:400;font-size:20px;font-style:normal;color:#0f172a;line-height:1.2;margin-bottom:20.0px}
.type, .type li, .type p, .notyf, .type label, .type input, .type select, .type .choices__inner{font-family:Inter;font-weight:400;font-size:16.0px;font-style:normal;color:#334155;line-height:1.6;margin-bottom:25.0px}
:root{--primary-colour:#2563eb;--secondary-colour:#0f172a}";',
        'typeJSON' => 'a:8:{s:8:".type h1";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:6:"46.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:8:".type h2";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:6:"38.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:8:".type h3";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:4:"32px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:8:".type h4";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:4:"26px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:8:".type h5";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:4:"24px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:8:".type h6";a:7:{s:11:"font-family";s:6:"Lexend";s:11:"font-weight";s:3:"400";s:9:"font-size";s:4:"20px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#0f172a";s:11:"line-height";s:3:"1.2";s:13:"margin-bottom";s:6:"20.0px";}s:95:".type, .type li, .type p, .notyf, .type label, .type input, .type select, .type .choices__inner";a:7:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"400";s:9:"font-size";s:6:"16.0px";s:10:"font-style";s:6:"normal";s:5:"color";s:7:"#334155";s:11:"line-height";s:3:"1.6";s:13:"margin-bottom";s:6:"25.0px";}s:5:":root";a:2:{s:16:"--primary-colour";s:7:"#2563eb";s:18:"--secondary-colour";s:7:"#0f172a";}}',
    ];
}
