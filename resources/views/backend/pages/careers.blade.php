@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Careers') }}
        </div>

        <div class="card-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCareer">
            Create
          </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td><a href="{{ $item->image }}"><img src="{{ $item->image }}" height="350" width="250" alt=""></a></td>
                        <td>
                            <button type="button" class="btn btn-warning text-light ms-3" data-bs-toggle="modal" data-bs-target="#editCareer{{ $item->id }}">
                                Edit
                              </button>
                          <button type="button" class="btn btn-danger text-light ms-3" data-bs-toggle="modal" data-bs-target="#remeoveCareer{{ $item->id }}">
                            Remove
                          </button>
                        </td>
                    </tr>

                    <!-- Update Modal -->
                    <div class="modal fade" id="editCareer{{ $item->id }}" tabindex="-1" aria-labelledby="removeEventLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="{{ route('admin.pages.careers.update',$item->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="createNoticeLabel">Add Career</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label for="image">Title</label>
                                          <input type="text" name="title" value="{{ $item->title }}" class="form-control">
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

                    <!-- Delete Modal -->
                    <div class="modal fade" id="remeoveCareer{{ $item->id }}" tabindex="-1" aria-labelledby="removeEventLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <form action="{{ route('admin.pages.careers.delete',$item->id) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <h3>Are you sure you want remove the notice?</h3>
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