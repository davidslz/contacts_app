@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row justify-content-center ">
            <div class="col-md-8 m-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">Create new contact</div>
                   
                    <div class="card-body">
                        <form action="{{ route('contacts.store') }}" method="post">
                            <div class="row mb-3">
                                @csrf
                                
                                <label class="col-md-4 col-form-label text-md-end mb-3 mt-3">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-3 mt-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <label class="col-md-4 col-form-label text-md-end mb-3 mt-3">Phone Number</label>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control mb-3 mt-3 @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <label class="col-md-4 col-form-label text-md-end mb-3 mt-3">Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-3 mt-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <label class="col-md-4 col-form-label text-md-end mb-3 mt-3">Age</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-3 mt-3 @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}">
                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="row m-3">
                                    <div class="col-md-8 offset-md-4">
                                        <button class="btn btn-success">Add</button>
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
