@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
            <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Data Kondisi Ruas Jalan </h5>
                  </div>
                  <div class="card-body">
                    <form action="{{url('ruas/'.$ruas->id)}}" method="POST">
                      @csrf @method('PATCH')
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Ruas</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="ruas" value="{{ $ruas->ruas }}""/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Pangkal Ruas</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            name="pangkal"
                            value="{{ $ruas->pangkal_ruas }}""
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Ujung Ruas</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              name="ujung"
                              value="{{ $ruas->ujung_ruas }}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Panjang Ruas</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control"
                            name="panjang"
                            value="{{ $ruas->panjang_ruas }}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Lebar Ruas</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control"
                            name="lebar"
                            value="{{ $ruas->lebar_ruas }}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Panjang Jalan Km Akhir</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control"
                            name="panjang_akhir"
                            value="{{ $ruas->panjang_jalan_km_akhir}}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Type Jalan</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control"
                            name="type"
                            value="{{ $ruas->type_jalan}}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Kelas Jalan</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control"
                            name="kelas"
                            value="{{ $ruas->kelas_jalan}}"
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