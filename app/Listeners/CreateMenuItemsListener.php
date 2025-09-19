<?php

declare(strict_types=1);

namespace Modules\Link\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

final class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('link.name');
    }
}
