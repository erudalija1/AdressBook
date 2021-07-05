<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="container my-5">
        
        <div class="row my-3">
            <a href="{{ route('contacts.create') }}" class="btn  btn-outline-success col-2">Add a new contact</a>
                <div class="col-8"></div>
        </div>
        <ol class="list-group">
            @foreach ($contacts as $contact)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            {{$contact->first_name.' '.$contact->last_name}}
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="contacts/{{$contact->id}}" class="btn btn-primary mx-3">View</a>
                            <a href="contacts/edit/{{$contact->id}}" class="btn btn-success mx-3">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete {{$contact->first_name.' '.$contact->last_name}}?')" class="btn btn-danger mx-3">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>


</x-app-layout>
