@extends('backend.layouts.app')

@section('title', __('Volunteer Fields'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Volunteer Fields')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.volunteer.fields.create')"
                    :text="__('Create Volunteer Field')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.fields-table />
        </x-slot>
    </x-backend.card>
@endsection
