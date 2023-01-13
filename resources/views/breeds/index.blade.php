@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">breeds List</h1>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Expandable Table</h3>
                <button class="btn float-right" data-toggle="modal" data-target="#breed-create">
                    Add New Breed
                </button>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Breed</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($breeds as $breed)
                        <tr data-widget="expandable-table" aria-expanded="false">
                          <td>{{ $breed->name }}</td>
                          <td>
                            <a href="" class="btn btn-outline-info btn-sm" title="Edit">
                               <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{ route('breeds.destroy', $breed->id) }}">
                                <button type="submit" title="Delete" class="btn btn-outline-danger btn-sm">
                                    @csrf
                                    @method('DELETE')
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                          </td>
                        </tr>
                        @if($breed->description != null)
                        <tr class="expandable-body d-none">
                          <td colspan="5">
                            <h4>Description</h4>
                            <p style="display: none;">
                              {{ $breed->description }}
                            </p>
                          </td>
                        </tr>
                        @endif
                    @endforeach
                  </tbody>
                  <tfoot>
                      {{ $breeds->links() }}
                  </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        <!-- Add Breed Modal -->
        <div class="modal fade" id="breed-create" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                  Add Breed
                </h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ route('breeds.store') }}" multiple>
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">
                      Breed Name
                    </label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ old('name') }}">
                    <div id="name" class="form-text">
                      Friesan - Pure Breed
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label for="description" class="form-label">
                      Description
                    </label>
                    <textarea class="form-control" name="description" id="description" aria-describedby="description">
                        {{ old('description') }}
                    </textarea>
                    <div id="description" class="form-text">
                      Friesan - Pure Breed
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary float-end">
                    Add
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                
            </div>
          </div>
        </div>
        </div>
        <!-- End Breed Create Modal -->
    </div>
@endsection
