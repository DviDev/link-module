<?php

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

    protected function create(): LinkTagModel
    {
        return $this->getModelClass()::factory()->create();
    }
}
