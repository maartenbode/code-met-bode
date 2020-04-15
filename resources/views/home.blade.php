@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Contactpersonen

                    <a href="{{ route('contact.create') }}" class="btn btn-primary btn-sm">
                        Toevoegen
                    </a>
                </div>

                <div class="list-group list-group-flush">
                    @foreach ($contacts as $contact)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $contact->full_name }}

                            <form action="{{ route('contact.destroy', $contact) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm">🗑</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
