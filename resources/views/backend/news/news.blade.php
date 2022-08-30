@extends('backend.layouts.app')

@section('title', __('News'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('News')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.media.news.create')"
                    :text="__('Create News')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.news-table />
        </x-slot>
    </x-backend.card>
@endsection
