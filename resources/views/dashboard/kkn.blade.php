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
                        <h3 class="panel-title">Input Laporan Kuliah Kerja Nyata</h3>
                          </div>
                          <div class="panel-body container-fluid">
                            <form autocomplete="off" action="/dashboard/kkn" method="post" enctype="multipart/form-data">
                            @csrf
                              <input type="hidden" class="form-control" name="npm_nip" value="{{ auth()->user()->npm_nip }}"/> 
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control @error('judul_kkn') is-invalid @enderror" name="judul_kkn" />
                                <label class="floating-label">Judul Laporan</label>
                                @error('judul_kkn')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('nama_kelompok') is-invalid @enderror" name="nama_kelompok" />
                                  <label class="floating-label">Nama Kelompok / Kampung</label>
                                  @error('nama_kelompok')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control @error('no_kelompok') is-invalid @enderror" name="no_kelompok" />
                                  <label class="floating-label">Nomor Kelompok (Contoh : 20)</label>
                                  @error('no_kelompok')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <select class="form-control @error('nama_user') is-invalid @enderror" name="nama_user">
                                  <option>&nbsp;</option>
                                  @foreach($dosen as $p)
                                  <option value="{{$p->nip}}">{{$p->nama}}</option>
                                  @endforeach
                                </select>
                                <label class="floating-label">Dosen Pembimbing</label>
                                @error('nama_user')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                  <select class="form-control @error('tahun') is-invalid @enderror" name="tahun">
                                    <option>&nbsp;</option>
                                    @foreach($result as $results)
                                  <option value="{{$results}}">{{$results}}</option>
                                  @endforeach 
                                  </select>
                                  <label class="floating-label">Tahun Ajaran</label>
                                  @error('tahun')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                  <select class="form-control @error('semester') is-invalid @enderror" name="semester">
                                    <option>&nbsp;</option>
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                                </select>
                                  <label class="floating-label">Semester</label>
                                  @error('semester')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group">
                              <label class="form-group"></label>
                                <!-- <input type="text" class="form-control @error('file_kkn') is-invalid @enderror" readonly="" /> -->
                                <input type="file" name="file_kkn" multiple=""/>
                                <!-- <label class="floating-label">Browse..</label> -->
                                @error('file_kkn')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                              </div>
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
       