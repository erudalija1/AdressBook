<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$contact->first_name.' '.$contact->last_name}}
        </h2>
    </x-slot>
<div class="row">
    <div class="col-12 col-md-3 p-5 text-wrap text-break">
        <p class="text-wrap text-break">
            <b>First Name: </b> {{$contact->first_name}}
        </p>
        <p class="text-wrap text-break">
            <b>Last Name: </b> {{$contact->last_name}}
        </p>
        <p class="text-wrap text-break">
            <b>Email: </b> {{$contact->email}}
        </p>
        <p class="text-wrap text-break">
            <b>Phone: </b> {{$contact->phone}}
        </p>
    </div>
</div>
</x-app-layout>
