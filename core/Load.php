<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 10.01.2019
 * Time: 23:48
 */

namespace Core;

use Core\DI\DI;


class Load
{
    const MASK_MODEL_ENTITY = '\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\Model\%s\%sRepository';

    public $di;

    public function __construct(DI $di)
    {
        $this->di = $di;

        return $this;
    }

    public function model($modelName, $modelDir = false)
    {
        $modelName = ucfirst($modelName);
        $modelDir = $modelDir ? $modelDir : $modelName;

        $namespaceModel = sprintf(self::MASK_MODEL_REPOSITORY, $modelDir, $modelName);

        $isClassModel = class_exists($namespaceModel);

        if($isClassModel) {
            $modelRegistry = $this->di->get('model') ?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);
            $this->di->set('model', $modelRegistry);
        }

        return $isClassModel;
    }


}