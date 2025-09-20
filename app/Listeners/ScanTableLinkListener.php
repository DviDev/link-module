<?php

declare(strict_types=1);

namespace Modules\Link\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

final class ScanTableLinkListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('link');
    }
}
