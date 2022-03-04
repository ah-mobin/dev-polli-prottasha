@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Dashboard') }}
        </div>
        <div class="card-body">
            {{ __('You are logged in!') }}
        </div>

        <div>
            <form>
                <input id="x" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
            </form>
        </div>
    </div>
@endsection
