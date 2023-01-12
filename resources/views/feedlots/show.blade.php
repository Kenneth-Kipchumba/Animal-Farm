@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <h1 class="text-black-50">{{ $feedlot->name }}</h1>

  <div class="card">
    <div class="card-header">
        <h4>
          Animals currently in {{ $feedlot->name }}
        </h4>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Breed</th>
          </tr>
        </thead>
        <tbody>
          @foreach($animals as $animal)
            <tr>
              <td>
                {{ $animal->name }}
              </td>
              <td>
                {{ $animal->breed }}
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            {{ $animals->links() }}
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@endsection
