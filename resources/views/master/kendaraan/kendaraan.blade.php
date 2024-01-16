@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
          <div class="card">
            <h5 class="card-header">Data Kendaraan Kota Madiun</h5>
            <div class="card-body">
              <a href="{{url('/kendaraan/create')}}" class="btn btn-primary btn-md" style="margin-right:40px; margin-top:5px; margin-bottom:20px;">Tambah</a>
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Jenis Kendaraan</th>
                      <th>Jumlah Unit</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @isset($kendaraan)
                      @foreach ($kendaraan as $item)                                    
                        <tr>
                          <td>{{ $item->jenis_kendaraan }}</td>
                          <td>{{ $item->jumlah_unit }}</td>
                          <td>{{ $item->tahun }}</td>
                          <td>
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('kendaraan/'.$item->id.'/edit')}}"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')?true:false" href="{{ url('kendaraan-hapus/'.$item->id)}}"
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
                </div>
                </div>
            </div>
            </div>
    </div>
@endsection