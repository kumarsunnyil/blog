@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Image Gallery </h3>
        <div class="row">
            <div class='list-group gallery'>
                @if($images->count())
                    @foreach($images as $image)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="/images/{{ $image->image }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $image->title }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
