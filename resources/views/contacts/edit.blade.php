@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row justify-content-center ">
            <div class="col-md-8 m-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">Edit a Contact</div>

                    <div class="card-body">
                        <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                            <div class="row mb-3">
                                @csrf
                                @method('put')

                                <label class="col-md-4 col-form-label text-md-end">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-2 mt-2 @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') ?? $contact->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label class="col-md-4 col-form-label text-md-end ">Phone Number</label>
                                <div class="col-md-6">
                                    <input type="tel"
                                        class="form-control mb-2 mt-2 @error('phone_number') is-invalid @enderror"
                                        name="phone_number" value="{{ old('phone_number') ?? $contact->phone_number }}">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label class="col-md-4 col-form-label text-md-end">Email</label>
                                <div class="col-md-6">
                                    <input type="text"
                                        class="form-control mb-2 mt-2 @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') ?? $contact->email }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label class="col-md-4 col-form-label text-md-end">Age</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-2 mt-2 @error('age') is-invalid @enderror"
                                        name="age" value="{{ old('age') ?? $contact->age }}">
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row m-3">
                                    <div class="col-md-8 offset-md-4">
                                        <button class="btn btn-success">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
