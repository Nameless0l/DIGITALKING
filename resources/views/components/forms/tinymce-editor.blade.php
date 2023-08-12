<form action="{{route('createPost')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- <form action="{{route('save_upload',['menu'=>$menu])}}" method="post" enctype="multipart/form-data"> --}}
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
        <div class="row" style="padding-top: 30px ;" >
            <table>
                <tr>
                    <td> <div class="col-12" >
                        <label for="ser">Le poste cible le Service :</label>
                        <select required name="service" id="ser" class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Choisir un service</option>
                            <option value="Infographie">infographie</option>
                            <option value="Serigraphie">Serigraphie</option>
                            <option value="Imprimerie">Imprimerie</option>
                            <option value="sites_web&aplications mobiles">conception de sites web & applications mobiles</option>
                            <option value="Packaging">Packaging</option>
                            <option value="Branding">Branding</option>
                            <option value="Gravure">Gravure</option>
                            <option value="Marquage">Marquage</option>
                        </select>
                    </div>
                </td>
                    <td>
                        <div class="custom-file col-12">
                            <label class="custom-file-label" for="chooseFile">Selectionner une images</label>
                            <input type="file" name="file" class="custom-file-input form-group" id="chooseFile">
                        </div>
                    </td>
                </tr>
            </table>


        </div>


    <textarea id="myeditorinstance" name="content" placeholder="mon poste ici"></textarea>
    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Enregistrer
    </button>
</form>
