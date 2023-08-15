@extends('templates.admin_base')
@section('content')
<div class="row" style="width:100%">
    <!-- Carousel wrapper -->
    <!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">

  </div>
@forelse ($posts as $post )
<div id="post-{{$post->id}}" class=" col-md-4 ">
    <div class="card">
      <img
        src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
        class="card-img-top"
        alt="Waterfall"
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
            {!! Str::limit($post->content, 100, '...') !!}
        </p>
        <a href="#!"class="btn btn-info" data-toggle="modal" data-target="#viewPost{{ $post->id }}">voir +</a>
        {{-- <a href="#!" class="btn btn-">modifier</a> --}}
        <a href="#!" class="btn btn-danger" onclick="confirmDelete({{ $post->id }})">Sup</a>
      </div>
    </div>
  </div>
     <!-- Modal pour afficher le post -->
     <div class="modal fade" id="viewPost{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="viewPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img
                    src="{{asset('storage/'.$post->file_path)}}"
                    class="card-img-top"
                    alt="Waterfall"
                  />

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="viewPostLabel">{{ $post->title }}</h5>
                </div>
                <div class="modal-body">
                    {!! $post->content !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
@empty
 <h1>Auccune photo</h1>
@endforelse

</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function confirmDelete(postId) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce message ?")) {
            // Utilisez Axios pour effectuer la suppression
              axios.delete(`/suppression/post/${postId}`)
                .then(response => {
                    // Supprimer l'élément de la liste côté client
                    document.getElementById(`post-${postId}`).remove();
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }

</script>

<!-- Carousel wrapper -->

@endsection

