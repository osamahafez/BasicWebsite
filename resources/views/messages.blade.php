@extends('layouts/app')

@section('content')
    <h1>Messages</h1>
    @if (count($messages) > 0)
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
@endsection
