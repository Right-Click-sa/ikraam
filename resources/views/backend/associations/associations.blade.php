@extends('backend.layouts.app')

@section('title', __('Associations'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Associations')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.associations.create')"
                    :text="__('Create Association')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.associations-table />
        </x-slot>
    </x-backend.card>
@endsection
