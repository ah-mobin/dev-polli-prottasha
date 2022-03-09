@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('What We Do') }}
        </div>

        @includeIf('flash')

        <div class="card-body">
            <button type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#addWWD">
                Add
              </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>image</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->desc }}</td>
                        <td><img src="{{ $item->image }}" height="150" alt=""></td>
                        <td>
                            <button type="button" class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#editWWD{{ $item->id }}">
                                Edit
                            </button>

                            <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#removeWWD{{ $item->id }}">
                                Remove
                            </button>
                        </td>
                    </tr>


                    <!-- Update Modal -->
    <div class="modal fade" id="editWWD{{ $item->id }}" tabindex="-1" aria-labelledby="editWWDLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form action="{{ route('admin.pages.what-we-do.update',$item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editWWDLabel">Update Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="{{ $item->title }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="details">Details</label>
                  <textarea name="desc" class="form-control">{{ $item->desc }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>
              </div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-light">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>


      <div class="modal fade" id="removeWWD{{ $item->id }}" tabindex="-1" aria-labelledby="removeWWDLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form action="{{ route('admin.pages.what-we-do.delete',$item->id) }}" method="post">
            @csrf
            @method('delete')
            <div class="modal-content">
              <div class="modal-body">
                <h3>Are you sure you want to delete the item?</h3>
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
                        <td colspan="4" class="text-center">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>




    <!-- Create Modal -->
    <div class="modal fade" id="addWWD" tabindex="-1" aria-labelledby="addWWDLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <form action="{{ route('admin.pages.what-we-do.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addWWDLabel">Add Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="details">Details</label>
                  <textarea name="desc" class="form-control">{{ old('desc') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" value="{{ old('image') }}" class="form-control">
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