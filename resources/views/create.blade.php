@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="mt-5 card">
                <div class="card-header">
                   Add Note
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <form action="{{ route('store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" name="subject" id=""  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Note</label>
                                <textarea name="body" id="summernote" cols="" rows=""></textarea>
                            </div>
                            <div class="mx-auto">
                                <button class="btn btn-success btn-lg">Save</button>
                            </div>
                            
                        </form>
                </div>
              </div>
        </div>  
    </div>
</div>
@endsection