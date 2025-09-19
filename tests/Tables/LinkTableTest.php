<?php

declare(strict_types=1);

namespace Modules\Link\Tests\Tables;

use Modules\Base\Services\Tests\BaseTest;
use Modules\Link\Models\LinkModel;

final class LinkTableTest extends BaseTest
{
    public function getModelClass(): string|LinkModel
    {
        return LinkModel::class;
    }
}
