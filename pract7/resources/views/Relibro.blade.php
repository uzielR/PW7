@extends ('layouts.plantilla')
@section('titulo', 'libreriaS')


@section('contenido')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">

<div class= "container mt-5 col-md-6"> 


    <div class = "titulo">
        <h1 class="display-1 text-center text-white ">ℕ𝕦𝕖𝕧𝕒 𝕟𝕠𝕥𝕒 </h1>
    </div>


    @if  (session()->has('confirmacion'))
    <script>
        Swal.fire({
               incon: 'Good job!',
               title: 'Libro guardado!',
               text: '{{ session('confirmacion')}}',
            } )
    </script>
    @endif

    @if  ($errors->any())
        @foreach ($errors->all() as $error)

            <script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Campos mal puestos'
              })</script>

        @endforeach
    @endif
            
    <br>
    <div class= "card" >
        
        <div class="card-header fs-2 fw-medium text-light text-center bg-danger">
            Datos del libro
        </div>

            <div class="card-body bg-gradient-custom">
                <form method="POST" action ="/guardarLibro">

                        @csrf 

                        <div class="row py-3">
                            <div class="col mb-3 fs-3 text-center">
                                <label class="form-label "> ISBN </label>
                                <input placeholder="Ejemplo: 0-7645-2641-3" type="text" name="txtISBN" class="form-control" value="{{ old('txtISBN') }}">
                                    <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtISBN')}}
                                    </div>
                            </div>
                            <div class="col mb-3 fs-3  text-center" >
                                <label class="form-label  "> Titulo </label>
                                <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}" >
                                <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtTitulo')}}
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row py-3">
                            <div class="col mb-3 fs-3 text-center">
                                <label class="form-label "> Autor </label>
                                <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor') }}">
                                    <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtAutor')}}
                                    </div>
                            </div>
                            <div class="col mb-3 fs-3  text-center" >
                                <label class="form-label  "> Paginas </label>
                                <input type="text" name="txtPaginas" class="form-control" value="{{ old('txtPaginas') }}" >
                                <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtPaginas')}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="row py-3">
                            <div class="col mb-3 fs-3 text-center">
                                <label class="form-label "> Editorial </label>
                                <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial') }}">
                                    <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtEditorial')}}
                                    </div>
                            </div>
                            <div class="col mb-3 fs-3  text-center" >
                                <label class="form-label  "> Email de la editorial </label>
                                <input type="text" name="txtEmail" class="form-control" value="{{ old('txtEmail') }}" >
                                <div class="mb-3 fs-5 fw-bold text-center text-warning" >
                                    {{ $errors->first('txtEmail')}}
                                </div>
                            </div>
                        </div>

            </div>

                        <div class="card-footer text-body-secondary fs-5 fw-medium text-primary text-center bg-danger ">
                            <div class = "d-grid gap-2 bg-danger">
                                <button type="submit" class="btn btn-danger fs-3 " >Publicar</button>
                            </div>
                        </div>

                </form>
    
    </div>

</div> 
<br><br><br><br>

@endsection