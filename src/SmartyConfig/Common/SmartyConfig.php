<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/xilinguole-portal-config/src/SmartyConfig/Xlgl',
            S_ROOT.'vendor/qixinyun/xilinguole-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/xilinguole-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
