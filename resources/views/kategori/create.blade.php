@extends('layout.app')

@section('content')
<div class="container-fluid py-4 px-5">
    <div class="row">
      <div class="col-12">
        <div class="card border shadow-xs mb-4">
    <form>
          <div class="card-header border-bottom pb-0">
            <div class="d-sm-flex align-items-center">
              <div>
                <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                <p class="text-sm">See information about all members</p>
              </div>
              <div class="ms-auto d-flex">
                <button type="submit" action="{{ route('kategori.store') }}" method="POST" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                  <span class="btn-inner--icon">
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                      <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                    </svg>
                  </span>
                  <span class="btn-inner--text">Add member</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card-body px-0 py-0">
            <div class="table-responsive p-0">
                <div class="card-body">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Category Name</label>
                            <input class="form-control  @error('nama_kategori') is-invalid @enderror" name="nama_kategori" type="text" placeholder="Category Name" value="{{ old('nama_kategori') }}" id="example-text-input">
                            @error('nama_kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layout.footer')
  </div>
@endsection
