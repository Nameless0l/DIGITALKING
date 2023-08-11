@extends('templates.admin_base')
@section('content')
<div class="row" style="width:100%">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card" >
        <div class="card-body">
          <p class="card-title">Advanced Table</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="example" class="display expandable-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>Quote#</th>
                      <th>Product</th>
                      <th>Business type</th>
                      <th>Policy holder</th>
                      <th>Premium</th>
                      <th>Status</th>
                      <th>Updated at</th>
                      <th></th>
                    </tr>
                  </thead>
              </table>
              </div>
            </div>
          </div>
          </div>
        </div>


      </div>
    </div>
</div>
@endsection

