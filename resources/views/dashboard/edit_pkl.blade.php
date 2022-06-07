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
                        <h3 class="panel-title">Edit Laporan Praktek Kerja Lapangan</h3>
                          </div>
                          <div class="panel-body container-fluid">
                            <form autocomplete="off" action="/dashboard/edit/{{$pkl->id_pkl}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control" name="judul_pkl" value="{{ $pkl -> judul_pkl }}" />
                                <label class="floating-label">Judul Laporan</label>
                              </div>
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="text" class="form-control" name="instansi_pkl" value="{{ $pkl -> instansi_pkl }}" />
                                <label class="floating-label">Instansi atau Kantor PKL</label>
                              </div>
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <textarea name="data_mhs" rows="5" cols="40" class="form-control tinymce-editor">{{ old('data_mhs', $pkl->data_mhs) }}</textarea>
                                <label class="floating-label">Nama dan NPM Mahasiswa</label>
                              </div>  
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                              <?php $nip= $pkl->nip ?>
                                <select class="form-control @error('nip') is-invalid @enderror" name="nip">
                                  <option>&nbsp;</option>
                                  @foreach($dosen as $p)
                                  <option value="{{ $p->nip }}" {{ $nip == $p->nip ? 'selected' : '' }}>{{ $p->nama }}</option>
                                  @endforeach
                                </select>
                                <label class="floating-label">Dosen Pembimbing</label>
                                @error('nip')
                                  <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group form-material floating row" data-plugin="formMaterial">
                                <div class="col-md-6">
                                <?php $tahun= $pkl->tahun ?>
                                  <select class="form-control @error('tahun') is-invalid @enderror" name="tahun">
                                    <option>&nbsp;</option>
                                    @foreach($result as $results)
                                    <option value="{{ $results }}" {{ $tahun == $results ? 'selected' : '' }}>{{ $results }}</option>
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
                                    <option value="ganjil" {{ $pkl->semester == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                                    <option value="genap" {{ $pkl->semester == 'Genap' ? 'selected' : '' }}>Genap</option>
                                </select>
                                  <label class="floating-label">Semester</label>
                                  @error('semester')
                                  <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                  @enderror
                                </div>
                              </div>
                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="hidden" name="old_file_pkl" value="{{$pkl->file_pkl}}" />
                                <input type="text" class="form-control" readonly="" />
                                <input type="file" name="file_pkl" multiple="" />
                                <label class="floating-label">Browse..</label>
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
@endsection
@push('custom-scripts')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 200,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endpush