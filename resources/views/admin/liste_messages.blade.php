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
                  <th>supprimer</th>
                </tr>
              </thead>
              <tbody>
                @foreach($messages as $message)
                    <tr id="message-{{ $message->id }}">
                    <td>{{ Str::limit($message->content, 30, '...') }}</td>
                    <td class="font-weight-bold">$116</td>
                    <td>{{$message->created_at->format('D M Y')}}</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                    <td>
                        <button class="btn btn-danger" onclick="confirmDelete({{ $message->id }})">Supprimer</button>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
      function confirmDelete(messageId) {
          if (confirm("Êtes-vous sûr de vouloir supprimer ce message ?")) {
              // Utilisez Axios pour effectuer la suppression
                axios.delete(`/suppression/message/${messageId}`)
                  .then(response => {
                      // Supprimer l'élément de la liste côté client
                      document.getElementById(`message-${messageId}`).remove();
                  })
                  .catch(error => {
                      console.error(error);
                  });
          }
      }
  </script>


@endsection

