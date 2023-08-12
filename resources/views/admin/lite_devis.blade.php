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
                  <th>Description</th>
                  <th>Objet</th>
                  <th>Date</th>
                  <th>Statut</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Search Engine Marketing</td>
                  <td class="font-weight-bold">$362</td>
                  <td>21 Sep 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Search Engine Optimization</td>
                  <td class="font-weight-bold">$116</td>
                  <td>13 Jun 2018</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
b
