<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-button href="{{route('admin.link.comments', $row->id)}}" label="comments" teal/>
        <x-button href="{{route('admin.link.tags', $row->id)}}" label="tags" teal/>
    </div>
    <div>Descrição: {{$row->description}}</div>
</div>
