<nav class="navbar navbar-expand-lg bg-dark my-custom-navbar" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href=""{{ route('apodoInicio')}}"">📚</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('apodoInicio')}}">Home</a>
          <a class="nav-link" href="{{ route('apodoRelibro')}}">Libro nuevo</a>

        </div>
      </div>
    </div>
  </nav>

  
  <style>
.my-custom-navbar {
    height: 60px; /* Ajusta el valor según tu preferencia */
}
</style>