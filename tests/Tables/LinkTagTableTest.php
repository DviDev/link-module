<?php

namespace Modules\Link\Tests\Tables;

use Modules\Base\Services\Tests\BaseTest;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Models\LinkTagModel;

class LinkTagTableTest extends BaseTest
{

    public function getModelClass(): string|LinkTagModel
    {
        return LinkTagModel::class;
    }
}
