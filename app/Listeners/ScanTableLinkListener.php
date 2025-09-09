<?php

namespace Modules\Link\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableLinkListener
{
    public function handle($event): void
    {
        new ScanTableDomain()->scan('link');
    }
}
