<?php

declare(strict_types=1);

namespace Modules\Link\Providers;

use Illuminate\Support\Facades\Event;
use Livewire;
use Modules\Base\Contracts\BaseServiceProviderContract;
use Modules\DBMap\Events\ScanTableEvent;
use Modules\Link\Http\Livewire\Pages\LinksPage;
use Modules\Link\Listeners\CreateMenuItemsListener;
use Modules\Link\Listeners\DefineSearchableAttributes;
use Modules\Link\Listeners\ScanTableLinkListener;
use Modules\Link\Listeners\TranslateViewElementPropertiesLinkListener;
use Modules\Project\Events\CreateMenuItemsEvent;
use Modules\View\Events\DefineSearchableAttributesEvent;
use Modules\View\Events\ElementPropertyCreatingEvent;

final class LinkServiceProvider extends BaseServiceProviderContract
{
    public function registerEvents(): void
    {

        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsListener::class);
        Event::listen(DefineSearchableAttributesEvent::class, DefineSearchableAttributes::class);
        Event::listen(ScanTableEvent::class, ScanTableLinkListener::class);
        Event::listen(ElementPropertyCreatingEvent::class, TranslateViewElementPropertiesLinkListener::class);
    }

    public function provides(): array
    {
        return [
            RouteServiceProvider::class,
        ];
    }

    protected function registerComponents(): void
    {
        Livewire::component('link::pages.links', LinksPage::class);
    }

    public function getModuleName(): string
    {
        return 'Link';
    }

    public function getModuleNameLower(): string
    {
        return 'link';
    }
}
