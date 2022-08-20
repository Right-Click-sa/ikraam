@extends('backend.layouts.app')

@section('title', __('Contact Us'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Contact Us')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.contact-us-table />
        </x-slot>
    </x-backend.card>
@endsection
