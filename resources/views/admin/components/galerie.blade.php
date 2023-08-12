@extends('templates.admin_base')
@section('content')

<!-- Gallery -->

    <div class="container" style="width: 100%">
        <form style="width: 100%" action="{{route('save_upload',['menu'=>$menu])}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Ajouter d'autres images</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
                <strong>{{ Session::get('file'); }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div class="custom-file">
                <input type="file" name="file[]" multiple class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Selectionner une ou plusieurs images</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Enregistrer
            </button>
        </form>
    </div>
    @forelse ($gallery as $image)
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img
          src="{{asset($image->file_path)}}"
          class="w-100 shadow-1-strong rounded mb-4"
          alt="Boat on Calm Water"
        />
      </div>
    @empty
      <div>Galerie Vide</div>
    @endforelse
</div>

@endsection

