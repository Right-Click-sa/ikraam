@extends('backend.layouts.app')

@section('title', __('Available Jobs'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Available Jobs')
        </x-slot>

            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.job.create')"
                    :text="__('Create Job')"
                />
            </x-slot>

        <x-slot name="body">
            <livewire:backend.jobs-table />
        </x-slot>
    </x-backend.card>
@endsection
