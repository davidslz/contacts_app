@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush

@section('content')
    <div class="welcome d-flex justify-content-center p-5">
        <div class="text-center">
            <h1 class="text-white">Store Your Contacts Now</h1>
            <a class="btn btn-lg btn-dark m-3" href="{{ route('register') }}">Get Started</a>
        </div>
    </div>
@endsection