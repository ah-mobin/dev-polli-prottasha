@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Events/News') }}
        </div>

        <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEvent">
            Create
          </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td><a href="{{ $item->link }}" target="_blank">Click Here</a></td>
                        <td>
                          <button type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#editEvent{{ $item->id }}">
                            Edit
                          </button>
                          <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#remeoveEvent{{ $item->id }}">
                            Remove
                          </button>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editEvent{{ $item->id }}" tabindex="-1" aria-labelledby="editEventLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('admin.events.update',$item->id) }}" method="post">
                          @csrf
                          @method('put')
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editEventLabel">Edit Event Data</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="editTitle">Title</label>
                                <input type="text" name="title" value="{{ $item->title }}" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="editLink">Link</label>
                                <input type="text" name="link" value="{{ $item->link }}" class="form-control">
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                              <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success text-light">Save changes</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                    <!-- Delete Modal -->
                    <div class="modal fade" id="remeoveEvent{{ $item->id }}" tabindex="-1" aria-labelledby="removeEventLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('admin.events.delete',$item->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <h3>Are you sure you want remove the event?</h3>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                              <button type="button" class="btn btn-success text-light" data-bs-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-danger text-light">Yes</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
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
    <div class="modal fade" id="createEvent" tabindex="-1" aria-labelledby="createEventLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('admin.events.store') }}" method="post">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createEventLabel">Edit Event Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="editTitle">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="editLink">Link</label>
                <input type="text" name="link" value="{{ old('link') }}" class="form-control">
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