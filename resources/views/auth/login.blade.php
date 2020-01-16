@extends('auth.contenido')

@section('login')
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card-group mb-0">
                <div class="card p-4">
                <form>
                <div class="card-body">
                    <h1 class="text-center">Indenticación</h1>
                    <p class="text-muted">Logearse al sistema</p>
                    <div class="form-group mb-3">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group mb-4">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="password" name="clave" id="clave" class="form-control" placeholder="Password">
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary px-4">Ingresar</button>
                    </div>
                    </div>
                </div>
                </form>
                </div>

            </div>
        </div>
        <div class="col-md-3"></div>
  </div>
@endsection
