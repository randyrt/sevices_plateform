@extends('admin.base.index')

@section('| dashbord')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h1 class="display-5">Liste de tous les emails de clients</h1>

      <div class="text-center col-md-6">
        <div class="container p-3 card border-info">
          <table class="table table-info ">
            <thead>
              <tr>
                <th>Clients</th>
              </tr>
            </thead>
            <tbody>
               @foreach($clients as $client)
              <tr>
                <td>{{ $client->email }}</td>
              </tr>
            </tbody>
              @endforeach
          </table>
        </div>
      </div>
      <div class="mt-3 col-md-6">
        {{$clients->links() }}
      </div>
@endsection