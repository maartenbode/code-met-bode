@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Contactpersoon toevoegen
                    </div>

                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="first_name">Voornaam</label>
                                <input type="text" name="first_name" class="form-control" id="first_name">
                            </div>

                            <div class="form-group">
                                <label for="insertion">Tussenvoegsel</label>
                                <input type="text" name="insertion" class="form-control" id="insertion">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Achternaam</label>
                                <input type="text" name="last_name" class="form-control" id="last_name">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mailadres</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Opslaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
