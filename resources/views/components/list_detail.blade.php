<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <x-dvui::button.group class="text-sm border dark:border-gray-500 dark:text-gray-400 divide-x divide-gray-500">
        <x-dvui::link text="comments" url="{{route('admin.link.comments', $row->id)}}" teal
                      class="px-2 py-1 rounded-l-md"/>
        <x-dvui::link text="tags" url="{{route('admin.link.tags', $row->id)}}" teal class="px-2 py-1 rounded-r-md"/>
    </x-dvui::button.group>
    <div>Descrição: {{$row->description}}</div>
</div>
