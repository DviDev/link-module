<?php

declare(strict_types=1);

namespace Modules\Link\Listeners;

use Modules\Project\Contracts\DefineSearchableAttributesContract;

final class DefineSearchableAttributes extends DefineSearchableAttributesContract
{
    protected function searchableFields(): array
    {
        return [];
    }

    protected function moduleName(): string
    {
        return config('link.name');
    }
}
