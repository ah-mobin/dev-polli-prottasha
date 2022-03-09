@extends('backend.layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Gallery') }}
        </div>


        @includeIf('flash')

        <div class="card-body">
            <button type="button" class="btn btn-primary text-light mb-5" data-bs-toggle="modal" data-bs-target="#addImage">
                Add
              </button>


              <div class="row">
                  @forelse($gallery as $img)
                  <div class="col-md-6">
                    <div class="col-5">
                      <img src="{{ $img->image }}" class="img-fluid w-100"  alt="">
                    </div>
                    <div class="col-1">
                      <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal" data-bs-target="#removeImg{{ $img->id }}">
                          Remove
                      </button>
                    </div>
                </div>


                <div class="modal fade" id="removeImg{{ $img->id }}" tabindex="-1" aria-labelledby="removeImgLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('admin.galleries.delete',$img->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <div class="modal-content">
                              <div class="modal-body">
                                Are you sure you want to delete the image?
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
                <div class="col-12">
                    <h5 class="text-center">No Image Found In Gallery</h5>
                </div>
                 @endforelse
                 
              </div>
            
        </div>
    </div>


    <div class="modal fade" id="addImage" tabindex="-1" aria-labelledby="addImageLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.galleries.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="form-group">
                        <label for="">Image Upload</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-warning text-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success text-light">Upload</button>
                  </div>
                </div>
              </form>
        </div>
      </div>
@endsection