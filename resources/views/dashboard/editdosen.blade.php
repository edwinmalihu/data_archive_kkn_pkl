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
                        <h3 class="panel-title">Edit Data Dosen</h3>
                          </div>
                          <div class="panel-body container-fluid">
                            <form autocomplete="off" action="/dashboard/update-dosen/{{$dosen->id}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$dosen->nama}}"/>
                                <label class="floating-label">Nama Dosen</label>
                                @error('nama')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>

                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{$dosen->nip}}" />
                                <label class="floating-label">Nomor Induk Dosen atau Nomor Induk Pegawai</label>
                                @error('nip')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>

                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('fakultas') is-invalid @enderror" name="fakultas" value="{{$dosen->fakultas}}" />
                                  <label class="floating-label">Fakultas</label>
                                  @error('fakultas')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{$dosen->jurusan}}" />
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
                                    <option value="1" {{ $dosen->agama == '1' ? 'selected' : '' }}>Islam</option>
                                    <option value="2" {{ $dosen->agama == '2' ? 'selected' : '' }}>Katolik</option>
                                    <option value="3" {{ $dosen->agama == '3' ? 'selected' : '' }}>Protestan</option>
                                    <option value="4" {{ $dosen->agama == '4' ? 'selected' : '' }}>Hindu</option>
                                    <option value="5" {{ $dosen->agama == '5' ? 'selected' : '' }}>Buddha</option>
                                    <option value="6" {{ $dosen->agama == '6' ? 'selected' : '' }}>konghucu</option>
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
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$dosen->alamat}}"/>
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
@endsection   