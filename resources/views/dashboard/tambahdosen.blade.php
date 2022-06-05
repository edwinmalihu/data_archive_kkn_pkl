@extends('dashboard.layout')
@section('container')          
          <!-- Form -->
          <div class="col-xxl-3">
            <div class="row h-full" data-plugin="matchHeight">
              <div class="col-xxl-12 col-lg-12 col-sm-12">
                <div class="card card-shadow card-completed-options">
                  <div class="card-block p-30">
                        <!-- Panel Floating Labels -->
                    <div class="panel">
                      <div class="panel-heading">
                        <h3 class="panel-title">Input Data Dosen</h3>
                          </div>
                          <div class="panel-body container-fluid">
                            <form autocomplete="off" action="/dashboard/addDosen" method="post" enctype="multipart/form-data">
                            @csrf
                              <input type="hidden" class="form-control" name="" value=""/> 
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" />
                                <label class="floating-label">Nama Dosen</label>
                                @error('nama')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>

                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" />
                                <label class="floating-label">Nomor Induk Dosen atau Nomor Induk Pegawai</label>
                                @error('nip')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>

                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('fakultas') is-invalid @enderror" name="fakultas" />
                                  <label class="floating-label">Fakultas</label>
                                  @error('fakultas')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" />
                                  <label class="floating-label">Jurusan</label>
                                  @error('jurusan')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                              </div>

                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                  <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option>&nbsp;</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Katolik</option>
                                    <option value="3">Protestan</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Buddha</option>
                                    <option value="2">Konghucu</option>
                                </select>
                                  <label class="floating-label">Agama</label>
                                  @error('agama')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                              </div>

                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" />
                                <label class="floating-label">Alamat</label>
                                @error('alamat')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>

                              <!-- COBA UNTUK INPUTAN TEXT AREA -->
                              <!-- <div class="form-group form-material floating" data-plugin="formMaterial">
                                <textarea class="form-control @error('') is-invalid @enderror" rows="3" name=""></textarea>
                                <label class="floating-label">Alamat</label>
                                @error('')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div> -->

                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>

                            </form>
                          </div>
                        </div>
                        <!-- End Panel Floating Labels -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Completed Options -->
@endsection
       