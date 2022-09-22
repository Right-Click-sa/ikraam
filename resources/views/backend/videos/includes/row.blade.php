<x-livewire-tables::bs4.table.cell>
    {{ $row->id }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->title }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <x-utils.edit-button :href="route('admin.media.videos.edit', $row)" />
    <x-utils.delete-button :href="route('admin.media.videos.destroy', $row)"/>
</x-livewire-tables::bs4.table.cell>
