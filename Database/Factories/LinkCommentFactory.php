<?php

namespace Modules\Link\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Link\Entities\LinkComment\LinkCommentEntityModel;
use Modules\Link\Models\LinkCommentModel;

/**
 * @method LinkCommentModel create(array $attributes = [])
 * @method LinkCommentModel make(array $attributes = [])
 */
class LinkCommentFactory extends Factory
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
        $p = LinkCommentEntityModel::props(null, true);
        return [

        ];
    }
}