@extends('backend.layouts.app')

@section('title', __('Committees'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Committees')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.about.committees.create')"
                    :text="__('Create Committee')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.committees-table />
        </x-slot>
    </x-backend.card>
@endsection
