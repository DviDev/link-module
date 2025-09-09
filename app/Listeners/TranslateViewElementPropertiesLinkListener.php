<?php

namespace Modules\Link\Listeners;

use Modules\Base\Contracts\BaseTranslateViewElementPropertiesListener;

class TranslateViewElementPropertiesLinkListener extends BaseTranslateViewElementPropertiesListener
{
    protected function moduleName(): string
    {
        return config('link.name');
    }

    protected function moduleNameLower(): string
    {
        return strtolower(config('link.name'));
    }
}
