<?php

namespace Modules\Link\Tests\Tables;

use Modules\Base\Services\Tests\BaseTest;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Models\LinkTagModel;

class LinkTagTableTest extends BaseTest
{

    public function getEntityClass(): string|LinkTagEntityModel
    {
        return LinkTagEntityModel::class;
    }

    public function getModelClass(): string|LinkTagModel
    {
        return LinkTagModel::class;
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

    protected function create(): LinkTagModel
    {
        return $this->getModelClass()::factory()->create();
    }
}
