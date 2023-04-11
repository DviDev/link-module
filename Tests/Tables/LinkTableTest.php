<?php

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
        parent::testTableMustExist();
    }

    public function testTableHasExpectedColumns()
    {
        parent::testTableHasExpectedColumns();
    }

    public function testCanCreateInstanceOfEntity()
    {
        parent::testCanCreateInstanceOfEntity();
    }

    public function testCanCreateInstanceOfModel()
    {
        parent::testCanCreateInstanceOfModel();
    }

    public function testShouldSave($attributes = null)
    {
        parent::testShouldSave($attributes);
    }

    public function testShouldUpdate($attributes = null)
    {
        parent::testShouldUpdate($attributes);
    }

    public function testShouldDelete()
    {
        parent::testShouldDelete();
    }

    protected function create(): LinkModel
    {
        return $this->getModelClass()::factory()->create();
    }
}
