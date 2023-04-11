<?php

namespace Modules\Link\Database\Factories;

use Modules\Base\Factories\BaseFactory;
use Modules\Link\Models\LinkModel;

/**
 * @method LinkModel create(array $attributes = [])
 * @method LinkModel make(array $attributes = [])
 */
class LinkFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LinkModel::class;

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
