@extends('backend.layouts.app')

@section('title', __('Orders Types'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Orders Types')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.order.types.create')"
                    :text="__('Create Type')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.order-types-table />
        </x-slot>
    </x-backend.card>
@endsection
