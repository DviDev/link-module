<?php

use Modules\Base\Services\Tests\BaseTest;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;
use Modules\Link\Models\LinkCommentModel;

class LinkCommentTableTest extends BaseTest
{

    public function getEntityClass(): string|LinkCommentEntityModel
    {
        return LinkCommentEntityModel::class;
    }

    public function getModelClass(): string|LinkCommentModel
    {
        return LinkCommentModel::class;
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

    protected function create(): LinkCommentModel
    {
        return $this->getModelClass()::factory()->create();
    }
}
