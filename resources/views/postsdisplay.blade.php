@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        This is a posts View page that is displayed.

                            <form method="POST" action="/profile">
                                @csrf
                            </form>
                            <form action="/foo/bar" method="POST">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ method_field('PUT') }}
                                <?php echo method_field('PUT'); ?>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
