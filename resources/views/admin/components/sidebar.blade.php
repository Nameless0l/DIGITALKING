<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('master')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Post</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('create_post')}}">Creer un poste</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('listePoste')}}">Liste des Posts</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Galerie" aria-expanded="false" aria-controls="Galerie">
          <i class="mdi mdi-folder-multiple-image menu-icon"></i>
          <span class="menu-title">Galerie</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Infographie'])}}">Infographie</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Serigraphie'])}}">Serigraphie</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Imprimerie'])}}">Imprimerie</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Photographie'])}}">Photographie</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Gravure'])}}">Gravure</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Branding'])}}">Branding</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Packaging'])}}">Packaging</a></li>
          </ul>
        </div>
        <div class="collapse" id="Galerie">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('gellerie',['menu'=>'Marquage'])}}">Marquage</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="mdi mdi-store menu-icon"></i>
          <span class="menu-title">Devis</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('liste-devis')}}">Nouveaux</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#messages" aria-expanded="false" aria-controls="messages">
          <i class="mdi mdi-comment menu-icon"></i>
          <span class="menu-title">Messages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="messages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('messages')}}">Messages</a></li>
          </ul>
        </div>
        <div class="collapse" id="messages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('liste-devis')}}">Devis</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#database" aria-expanded="false" aria-controls="database">
          <i class="mdi mdi-database-plus menu-icon"></i>
          <span class="menu-title ">Base de donnnées</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="database">
          <ul class=" nav flex-column  sub-menu">
            <li class="nav-item "><a class="nav-link" href="{{route('utilisateurs')}}">Utilisateurs</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sites" aria-expanded="false" aria-controls="sites">
          <i class="mdi mdi-file-tree menu-icon"></i>
          <span class="menu-title">Mes sites</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sites">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/">King digital</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
