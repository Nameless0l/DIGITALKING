@extends('templates.admin_base')
@section('content')
<div class="row" style="width:100%" >
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Devis</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Statut</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                    <tr id="message-{{ $user->id }}">
                    <td>{{$user->name}}</td>
                    <td class="font-weight-bold">{{$user->email}}</td>
                    <td>{{$user->created_at->format('D M Y')}}</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

