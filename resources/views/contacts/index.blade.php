@extends('layouts.app')

@section('content')
    <div class="container mt-3 w-50">
        @forelse ($contacts as $contact)
            <div class="d-flex justify-content-between bg-dark mb-3 rounded px-2 py-2">
                <div>
                    <img src="/img/C.jpg" class="logo">
                </div>

                <div class="d-flex align-items-center">
                    <p class="me-2 mb-0 text-white d-inline-block text-truncate" style="max-width: 90px;">{{ $contact->name }}</p>
                    <p class="me-1 mb-0 d-none d-md-block d-inline-block text-truncate" style="max-width: 130px;">
                        <a class="nav-link text-white" href="mailto:{{ $contact->email }}">
                            {{ $contact->email }}
                        </a>
                    </p>
                    <p class="me-1 mb-0 d-none d-md-block">
                        <a class="nav-link text-white" href="tel:{{ $contact->phone_number }}">
                            {{ $contact->phone_number }}
                        </a>
                    </p>
                </div>
            </div>
        @empty
            <div class="col-md-4 mx-auto">
                <div class="card card-body text-center">
                    <p>No contacts saved yet</p>
                    <a href="{{ route('contacts.create') }}">Add One!</a>
                </div>
            </div>
        @endforelse
    </div>
@endsection
