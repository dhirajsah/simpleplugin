<?php

namespace yourvendor\simpleplugin;

use Craft;
use craft\base\Plugin;
use yourvendor\simpleplugin\models\Settings;

class SimplePlugin extends Plugin
{
    public bool $hasCpSettings = true;

    public function init()
    {
        parent::init();
        Craft::info('SimplePlugin has been initialized', __METHOD__);
    }

    protected function createSettingsModel(): ?Settings
    {
        return new Settings();
    }

    protected function settingsHtml(): ?string
    {
        return Craft::$app->getView()->renderTemplate('simpleplugin/settings', [
            'settings' => $this->getSettings(),
            'id' => $this->id,
        ]);
    }
}
