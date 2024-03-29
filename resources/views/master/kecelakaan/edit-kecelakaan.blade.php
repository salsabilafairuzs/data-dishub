@extends('template.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
        <div class="col-lg-12 mb-4 order-0">                    
            <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Data Kecelakaan</h5>
                  </div>
                  <div class="card-body">
                    <form action="{{url('kecelakaan/'.$kecelakaan->id)}}" method="POST">
                      @csrf @method('PATCH')
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Tahun</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="tahun" value="{{ $kecelakaan->tahun}}"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Bulan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="bulan" value="{{ $kecelakaan->bulan}}"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Jumlah Kejadian</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="jml_kejadian" value="{{ $kecelakaan->jml_kejadian}}"/>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Jumlah Korban Meninggal</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            id="basic-default-company"
                            name="jml_korban_meninggal"
                            value="{{ $kecelakaan->jml_korban_meninggal}}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Jumlah Korban Luka Berat</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              name="jml_korban_luka_berat"
                              value="{{ $kecelakaan->jml_korban_luka_berat}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Jumlah Korban Luka Ringan</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control phone-mask"
                            name="jml_korban_luka_ringan"
                            value="{{ $kecelakaan->jml_korban_luka_ringan}}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Kerugian Material</label>
                        <div class="col-sm-10">
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control phone-mask"
                            name="kerugian_material"
                            value="{{ $kecelakaan->kerugian_material}}"
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
                </div>
                </div>
            </div>
            </div>
    </div>
@endsection