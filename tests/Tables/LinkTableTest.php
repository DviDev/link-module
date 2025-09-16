<?php

namespace Modules\Link\Tests\Tables;

use Modules\Base\Services\Tests\BaseTest;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;

class LinkTableTest extends BaseTest
{
    public function getEntityClass(): string|LinkEntityModel
    {
        return LinkEntityModel::class;
    }

    public function getModelClass(): string|LinkModel
    {
        return LinkModel::class;
    }
}
