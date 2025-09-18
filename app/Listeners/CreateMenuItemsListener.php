<?php

namespace Modules\Link\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('link.name');
    }
}
