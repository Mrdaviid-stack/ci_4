<?php

namespace Modules\Core\Config;

use CodeIgniter\Config\BaseConfig;

class Navs extends BaseConfig
{
    public $navs = [
        [
            'permission'    =>  '',
            'route'         =>  '',
            'label'         =>  '',
            'icon'          =>  '',
        ],
        [
            'permission'    =>  '',
            'route'         =>  '',
            'label'         =>  '',
            'icon'          =>  '',
            'subnav'        =>  [
                [
                    'permission'    =>  '',
                    'route'         =>  '',
                    'label'         =>  '',
                    'icon'          =>  '',
                ]
            ]
        ],
    ];
}