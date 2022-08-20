@extends('backend.layouts.app')

@section('title', __('Board of Trustees'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Board of Trustees')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.about.trustees.create')"
                    :text="__('Create Trustee')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.trustees-table />
        </x-slot>
    </x-backend.card>
@endsection
