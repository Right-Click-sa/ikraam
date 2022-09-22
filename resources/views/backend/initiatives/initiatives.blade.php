@extends('backend.layouts.app')

@section('title', __('Initiatives'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Initiatives')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.initiatives.create')"
                    :text="__('Create Initiative')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.initiatives-table />
        </x-slot>
    </x-backend.card>
@endsection
