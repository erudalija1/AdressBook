<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$contact->first_name.' '.$contact->last_name}}
        </h2>
    </x-slot>

    <div class="container my-5">


        <form class="m-5 pl-5" action="/contacts/{{ $contact->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="first_name">First name:</label>
                <input value="{{ old('first_name') ?? $contact->first_name}}" type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                @if ($errors->first('first_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="last_name">Last name:</label>
                <input value="{{ old('last_name') ?? $contact->last_name}}" type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                @if ($errors->first('last_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                <input value="{{ old('email') ?? $contact->email}}" type="text" class="form-control" name="email" id="email" placeholder="Email">
                @if ($errors->first('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Phone:</label>
                <input value="{{ old('phone') ?? $contact->phone}}" type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                @if ($errors->first('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                </div>
                <button type="submit" class="btn btn-primary my-1">Save</button>
            </div>

        </form>
    </div>


    </x-app-layout>
