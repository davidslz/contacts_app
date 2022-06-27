@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row justify-content-center ">
            <div class="col-md-12 m-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">Information of Contact</div>

                    <div class="card-body">
                        {{-- <dl class="row">
                            <dt class="col-sm-3">Name: </dt>
                            <dd class="col-sm-9">{{ $contact->name }}</dd>
                            <dt class="col-sm-3">Phone Number: </dt>
                            <dd class="col-sm-9">{{ $contact->phone_number }}</dd>
                            <dt class="col-sm-3">Email: </dt>
                            <dd class="col-sm-9">{{ $contact->email }}</dd>
                            <dt class="col-sm-3">Age: </dt>
                            <dd class="col-sm-9">{{ $contact->age }}</dd>
                            <dt class="col-sm-3">Created at: </dt>
                            <dd class="col-sm-9">{{ $contact->created_at }}</dd>
                            <dt class="col-sm-3">Last updated: </dt>
                            <dd class="col-sm-9">{{ $contact->updated_at }}</dd>
                        </dl> --}}
                        <p><strong>Name: </strong>{{ $contact->name }}</p>
                        <p> <strong>Phone Number: </strong><a class="text-dark" href="tel:{{ $contact->phone_number }}">
                            {{ $contact->phone_number }}
                        </a></p>
                        <p><strong>Email: </strong><a class="text-dark" href="mailto:{{ $contact->email }}">
                            {{ $contact->email }}
                        </a></p>
                        <p><strong>Age: </strong>{{ $contact->age }}</p>
                        <p><strong>Created at: </strong>{{ $contact->created_at }}</p>
                        <p><strong>Last Updated: </strong>{{ $contact->updated_at }}</p>
                        <div class="d-flex justify-content-between">
                            {{-- <button class="btn bg-secondary col-3 m-1">regresar</button> --}}
                            <a href=" {{ route('contacts.edit', $contact->id) }}">
                                <button class="btn bg-warning m-1">edit</button>
                            </a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn bg-danger m-1">delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection