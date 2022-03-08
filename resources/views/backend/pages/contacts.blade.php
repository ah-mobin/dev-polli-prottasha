@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Contact Messages') }}
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Subject</th>
                        <th width="40%">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>Name: {{ $item->name }} <br> Email: {{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->body }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>


    <!-- Create Modal -->
    <div class="modal fade" id="addCareer" tabindex="-1" aria-labelledby="createNoticeLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.pages.careers.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createNoticeLabel">Add Career</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="image">Title</label>
                    <input type="text" name="title" class="form-control">
                  </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
              <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success text-light">Create</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection