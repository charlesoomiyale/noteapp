@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
            <div class="mt-5 card">
                <div class="card-header">
                    View all Notes
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($notes as $note)
                        <a href="{{ route('show', ['note' => $note->id])}}"><li class="list-group-item">{{ $note->subject}}</li></a>
                        
                        @empty
                        <p>No records</p>
                        @endforelse
                      </ul>
                </div>
              </div>
        </div>  
    </div>
</div>
@endsection