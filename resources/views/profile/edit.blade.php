@extends('layouts.app')

@section('content')
    <div class="page-block">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="page-block">
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="page-block">
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
@endsection
