@extends('backend.layouts.app')

@section('title', __('Orders'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Orders')
        </x-slot>

            {{-- <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.order.requests.create')"
                    :text="__('Create Type')"
                />
            </x-slot> --}}

        <x-slot name="body">
            <livewire:backend.order-requests-table />
        </x-slot>
    </x-backend.card>
@endsection
