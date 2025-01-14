<?php

namespace yourvendor\simpleplugin\models;

use craft\base\Model;

class Settings extends Model
{
    public string $exampleSetting = 'Default Value';

    /**
     * Define validation rules for the model.
     */
    public function rules(): array
    {
        return [
            [['exampleSetting'], 'string'],
            [['exampleSetting'], 'required'],
        ];
    }
}
