<?php

declare(strict_types=1);

namespace Modules\Link\Tests\Tables;

use Modules\Base\Contracts\Tests\BaseTest;
use Modules\Link\Models\LinkTagModel;

final class LinkTagTableTest extends BaseTest
{
    public function getModelClass(): string|LinkTagModel
    {
        return LinkTagModel::class;
    }
}
