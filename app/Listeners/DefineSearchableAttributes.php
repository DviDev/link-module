<?php

namespace Modules\Link\Listeners;

use Modules\Link\Entities\Link\LinkEntityModel;
use Modules\Link\Models\LinkModel;
use Modules\Project\Events\EntityAttributesCreatedEvent;
use Modules\Project\Models\ProjectEntityAttributeModel;

class DefineSearchableAttributes
{
    private EntityAttributesCreatedEvent $event;

    public function handle(EntityAttributesCreatedEvent $event): void
    {
        $this->event = $event;
        if ($event->entity->module->name !== config('link.name')) {
            return;
        }

        foreach ($event->entity->entityAttributes as $attribute) {
            $this->default($attribute);
        }
    }

    protected function default(ProjectEntityAttributeModel $attribute): void
    {
        if ($this->event->entity->name !== LinkModel::table()) {
            return;
        }
        $p = LinkEntityModel::props();
        if (in_array($attribute->name, [
            $p->id,
        ])) {
            $attribute->update(['searchable' => true]);
        }
    }
}
