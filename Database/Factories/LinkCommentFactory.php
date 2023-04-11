<?php

namespace Modules\Link\Database\Factories;

use Modules\Base\Factories\BaseFactory;
use Modules\Link\Models\LinkCommentModel;

/**
 * @method LinkCommentModel create(array $attributes = [])
 * @method LinkCommentModel make(array $attributes = [])
 */
class LinkCommentFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LinkCommentModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return $this->getValues();
    }
}
