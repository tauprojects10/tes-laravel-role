@extends('layout.app')

@section('content')
<div class="container-fluid py-4 px-5">
    <div class="row">
      <div class="col-12">
        <div class="card border shadow-xs mb-4">
          <div class="card-header border-bottom pb-0">
            <div class="d-sm-flex align-items-center">
              <div>
                <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                <p class="text-sm">See information about all members</p>
              </div>
              <div class="ms-auto d-flex">
                <a href="{{ route('kategori.create') }}">
                    <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                      <span class="btn-inner--icon">
                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                          <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                        </svg>
                      </span>
                      <span class="btn-inner--text">Add member</span>
                    </button>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 py-0">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead class="bg-gray-100">
                  <tr>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Category</th>
                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7"></th>
                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7"></th>
                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($kategori->count() > 0)
                        @foreach ( $kategori as $kg )
                        <td>
                            <span class="text-secondary text-xs font-weight-bold">{{$loop->iteration}}</span>
                        </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm border border-secondary text-secondary bg-secondary">Offline</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">14/09/20</span>
                    </td>
                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-2" data-bs-toggle="tooltip" data-bs-title="Edit user">
                          <i class="fa-regular fa-pen-to-square fa-xl"></i>
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs ms-2" data-bs-toggle="tooltip" data-bs-title="Edit user">
                            <i class="fa-solid fa-trash fa-xl"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
                    @endforeach
                @endif
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layout.footer')
  </div>
@endsection
