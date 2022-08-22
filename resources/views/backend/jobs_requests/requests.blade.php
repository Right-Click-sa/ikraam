@extends('backend.layouts.app')

@section('title', __('Jobs Requests'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Jobs Requests')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.jobs-requests-table />
        </x-slot>
    </x-backend.card>
@endsection
