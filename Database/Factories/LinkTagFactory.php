<?php

namespace Modules\Link\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Link\Entities\LinkTag\LinkTagEntityModel;
use Modules\Link\Models\LinkTagModel;

/**
 * @method LinkTagModel create(array $attributes = [])
 * @method LinkTagModel make(array $attributes = [])
 */
class LinkTagFactory extends Factory
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
        $p = LinkTagEntityModel::props(null, true);
        return [

        ];
    }
}
