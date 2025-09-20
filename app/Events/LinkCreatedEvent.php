<?php

declare(strict_types=1);

namespace Modules\Link\Events;

use Illuminate\Queue\SerializesModels;

final class LinkCreatedEvent
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     */
    public function broadcastOn(): array
    {
        return [];
    }
}
