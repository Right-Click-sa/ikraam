@extends('backend.layouts.app')

@section('title', __('Regulations and Policies'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Regulations and Policies')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.about.policies.create')"
                    :text="__('Create Policy')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.policies-table />
        </x-slot>
    </x-backend.card>
@endsection
