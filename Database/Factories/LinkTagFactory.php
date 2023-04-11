<?php

namespace Modules\Link\Database\Factories;

use Modules\Base\Factories\BaseFactory;
use Modules\Link\Models\LinkTagModel;

/**
 * @method LinkTagModel create(array $attributes = [])
 * @method LinkTagModel make(array $attributes = [])
 */
class LinkTagFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LinkTagModel::class;

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
