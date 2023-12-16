@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
          <div class="card">
            <h5 class="card-header">Data Lokasi Flashing Kota Madiun</h5>
            <div class="card-body">
              <a href="{{url('/flashing/create')}}" class="btn btn-primary btn-md" style="margin-right:40px; margin-top:5px; margin-bottom:20px;">Tambah</a>
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Jalan</th>
                      <th>Status Jalan</th>
                      <th>Lokasi</th>
                      <th>Sistem Listrik</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @isset($flashing)
                      @foreach ($flashing as $item)
                      <tr>
                        <td>{{ $item->nama_jalan }}</td>
                        <td>{{ $item->status_jalan }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->sistem_listrik }}</td>
                        <td>
                          <div class="dropdown">
                            <button
                              type="button"
                              class="btn p-0 dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('flashing/'.$item->id.'/edit')}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')?true:false" href="{{ url('flashing-hapus/'.$item->id)}}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>   
                      @endforeach   
                    @endisset
                  </tbody>
                </table>
              </div>
            </div>
          </div>

                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img
                    src="../assets/img/illustrations/man-with-laptop-light.png"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                    />
                </div>
                </div>
            </div>
            </div>
    </div>
@endsection