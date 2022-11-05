<?php

namespace Modules\Link\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;

/**
 * @method LinkModel create(array $attributes = [])
 * @method LinkModel make(array $attributes = [])
 */
class LinkFactory extends Factory
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
        $p = LinkEntityModel::props(null, true);
        return [

        ];
    }
}
