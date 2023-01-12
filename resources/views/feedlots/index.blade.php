@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Feedlots</h1>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Expandable Table</h3>
                <button class="btn float-right" data-toggle="modal" data-target="#animal-create">
                    Add a New Feedlot
                </button>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($feedlots as $feedlot)
                      <tr>
                        <td>
                          <a href="{{ route('feedlots.show', $feedlot->id) }}" title="{{ $feedlot->purpose }}">
                          {{ $feedlot->name }}
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                      {{ $feedlots->links() }}
                  </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        <!--Feedlot Create Modal -->
        <div class="modal fade" id="animal-create" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                  Create A Feedlot
                </h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ route('feedlots.store') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">
                      Feedlot Name
                    </label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ old('name') }}">
                    <div id="name" class="form-text">
                      e.g Feedlot 1
                    </div>
                  </div>
                

                  <div class="mb-3">
                    <label for="purpose" class="form-label">
                      Purpose of the Feedlot
                    </label>
                    <textarea class="form-control" id="purpose" name="purpose" rows="3">
                        {{ old('purpose') }}
                    </textarea>
                    <div id="purpose" class="form-text">
                      e.g 
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary float-end">
                    Create
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                
            </div>
          </div>
        </div>
        </div>
        <!-- End Feedlot Create Modal -->
    </div>

<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
</script>
@endsection
