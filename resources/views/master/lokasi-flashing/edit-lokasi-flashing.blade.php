@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
            <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Data Lokasi Flashing</h5>
                  </div>
                  <div class="card-body">
                    <form action="{{url('flashing/'.$flashing->id)}}" method="POST" >
                      @csrf @method('PATCH')
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Jalan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="jalan" value="{{ $flashing->nama_jalan }}"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Status Jalan</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            name="status"
                            value="{{ $flashing->status_jalan}}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Lokasi</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              class="form-control"
                              name="lokasi"
                              value="{{ $flashing->lokasi }}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Sistem Listrik</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control phone-mask"
                            name="sistem_listrik"
                            value="{{ $flashing->sistem_listrik }}"
                          />
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