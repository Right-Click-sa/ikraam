@extends('backend.layouts.app')

@section('title', __('Videos'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Videos')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.media.videos.create')"
                    :text="__('Create Video')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.videos-table />
        </x-slot>
    </x-backend.card>
@endsection
