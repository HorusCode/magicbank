<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 15:23
 */

namespace Core\Template;


class Asset
{
    const JS_SCRIPT_MASK = "<script src='%s' type='text/javascript'></script>";
    const CSS_SCRIPT_MASK = "<link type='text/css' rel='stylesheet' href='%s'>";

    public static $container = [];

    private static function getAssetsPath()
    {
        return ROOT_DIR.'/assets';
    }

    public static function css($link)
    {
        $file = static::getAssetsPath().DIRECTORY_SEPARATOR.'css/'.$link;
        if(is_file($file)) {
            self::$container['css'][] = [
              'file' => '/assets/css/'.$link
            ];
        }
    }

    public static function js($link)
    {
        $file = static::getAssetsPath().DIRECTORY_SEPARATOR.'js/'.$link;

        if(is_file($file)) {
            self::$container['js'][] = [
                'file' => '/assets/js/'.$link
            ];
        }
    }

    public static function render($ext)
    {

        $listAssets = isset(self::$container[$ext]) ? self::$container[$ext] : false;
        if($listAssets) {
            $renderMethod = 'render'.ucfirst($ext);

            self::{$renderMethod}($listAssets);
        }
    }

    public static function renderJs($list)
    {

        foreach ($list as $item) {
            echo sprintf(self::JS_SCRIPT_MASK, $item['file']);
        }
    }
    public static function renderCss($list)
    {
        foreach ($list as $item) {
            echo sprintf(self::CSS_SCRIPT_MASK, $item['file']);
        }
    }
}