@extends('backend.layouts.app')

@section('title', __('Membership Types'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Membership Types')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.membership.create')"
                    :text="__('Create Membership')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.memberships-table />
        </x-slot>
    </x-backend.card>
@endsection
