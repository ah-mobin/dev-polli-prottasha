@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('About - History') }}
        </div>

        <div class="card-body">

            <form action="{{ route('admin.about.histories.update') }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <textarea class="ckeditor form-control" name="history">
                        {!! $data !!}
                    </textarea>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success text-light">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection