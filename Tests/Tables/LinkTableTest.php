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

    public function testTableMustExist()
    {
        parent::tableMustExist();
    }

    public function testTableHasExpectedColumns()
    {
        parent::tableHasExpectedColumns();
    }

    public function testCanCreateInstanceOfEntity()
    {
        parent::canCreateInstanceOfEntity();
    }

    public function testCanCreateInstanceOfModel()
    {
        parent::canCreateInstanceOfModel();
    }

    public function testShouldSave($attributes = null)
    {
        parent::shouldSave($attributes);
    }

    public function testShouldUpdate($attributes = null)
    {
        parent::shouldUpdate($attributes);
    }

    public function testShouldDelete()
    {
        parent::shouldDelete();
    }

    protected function create(): LinkModel
    {
        return $this->getModelClass()::factory()->create();
    }
}
