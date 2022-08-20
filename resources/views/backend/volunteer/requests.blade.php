@extends('backend.layouts.app')

@section('title', __('Volunteer Requests'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Volunteer Requests')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.volunteer-requests-table />
        </x-slot>
    </x-backend.card>
@endsection
