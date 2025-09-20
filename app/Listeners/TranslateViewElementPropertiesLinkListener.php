<?php

declare(strict_types=1);

namespace Modules\Link\Listeners;

use Modules\Base\Contracts\BaseTranslateViewElementPropertiesListener;

final class TranslateViewElementPropertiesLinkListener extends BaseTranslateViewElementPropertiesListener
{
    protected function moduleName(): string
    {
        return config('link.name');
    }

    protected function moduleNameLower(): string
    {
        return mb_strtolower(config('link.name'));
    }
}
