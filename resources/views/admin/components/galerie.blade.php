@extends('templates.admin_base')
@section('content')

<!-- Gallery -->
<div>


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
        <form action="{{route('delete-images')}}" @method('delete')>
             @csrf
                <div class="col-md-12" style="width: 100%" >
                    <br>
                    <br>
                    <br>
                    <button id="submitBtn" style="width: 100% ; padding-top: 15px"   type="submit" class="btn btn-primary" style="display: none;">Supprimer</button>
                </div>
         <div class="row">



            @forelse ($gallery as $image)
                <div class="col-md-3">
                    <div class="custom-control custom-checkbox image-checkbox" style="padding-top: 20px">
                        <input type="checkbox" name="option[]" class="custom-control-input" id="{{$image->file_path}}" value="{{$image->file_path}}">
                        <label class="custom-control-label" for="{{$image->file_path}}">
                            <img src="{{asset('/storage/'.$image->file_path)}}" alt="{{$image->file_path}}" class="img-fluid">
                        </label>
                    </div>
                </div>
            @empty
            <div>Galerie Vide</div>
            @endforelse
        </form>
</div>
</div>
</div>

<script>
    const checkboxes = document.querySelectorAll('.custom-control-input');
    const submitBtn = document.getElementById('submitBtn');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (isChecked) {
                submitBtn.style.display = 'block';
            } else {
                submitBtn.style.display = 'none';
            }
        });
    });
</script>
@endsection

