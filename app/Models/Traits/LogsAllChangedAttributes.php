<?php

namespace App\Models\Traits;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

trait LogsAllChangedAttributes
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->logOnlyDirty()
            ->useLogName($this->getMorphClass()); // Group all of these under a item log name
    }

    /**
     * Give each event a unique description.
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        // e.g. 'item.created', 'item.updated', 'item.deleted'
        return sprintf(
            '%s.%s',
            ucfirst($this->getMorphClass()),
            $eventName
        );
    }
}
