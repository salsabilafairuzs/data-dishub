@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
            <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Data Kendaraan</h5>
                  </div>
                  <div class="card-body">
                    <form action="{{url('kendaraan')}}" method="POST">
                      @csrf @method('POST')
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kendaraan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="kendaraan"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Jumlah Unit</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            name="jml_unit"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Tahun</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="tahun"/>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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