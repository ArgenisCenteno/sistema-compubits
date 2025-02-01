@extends('layouts.app')

@section('content')
<section class="vh-100"
  style="background-image: url('{{asset('iconos/fondo.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6">
        <div class="card" style="border-radius: 1rem;">
          <div class=" g-0">

            <div class=" d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                    <img src="{{ asset('iconos/logo-final.png') }}" alt="logo" width="200px">
                  </div>

                  <h5 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px;">Ingresar al sistema</h5>

                  <!-- Email -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label fw-bold" for="email">Email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" placeholder="Ingresar email" required>
                    @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
                  </div>

                  <!-- Contraseña -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label fw-bold" for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" placeholder="Ingresar contraseña" required>
                    @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
                  </div>

                  <!-- Botón de Ingreso -->
                  <div class="pt-1 mb-4 jus">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block"
                      type="submit">Ingresar</button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection