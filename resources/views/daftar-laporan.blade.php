@extends('dashboard.layout')
  
  @section('filter')
          <table>
            <tr>
              <td>Pilih Kategori : &nbsp </td>
              <td>
                <select id="filter" class="filter" name="filter">
                  <option class="pkl" value="pkl">Praktek Kerja Lapangan</option>
                  <option class="kkn" value="kkn">Kuliah Kerja Nyata</option>
                </select>                      
              </td>                   
            </tr>
          </table>
  @endsection

  @section('container')
        
  <div class="row" data-plugin="matchHeight" data-by-row="true">
          
          <div class="col-md-6">
            <!-- Card -->
            <div class="card card-block p-30 bg-blue-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_pkl}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Praktek Kerja Lapangan</div>
              </div>
            </div>
            <!-- End Card -->
          </div>
        
          <div class="col-lg-6">
            <!-- Card -->
            <div class="card card-block p-30 bg-red-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_kkn}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Kuliah Kerja Nyata</div>
              </div>
            </div>
            <!-- End Card -->
          </div>

        </div>

        <!-- panel table add row Pkl -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Daftar Laporan Praktek Kerja Lapangan</h3>
          </header>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                </div>
              </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="examplePkl">
              <thead>
                <tr>
                  <th>Judul PKL</th>
                  <th>Instansi PKL</th>
                  <th>Nama & NPM</th>
                  <th>Semester</th>
                  <th>Tahun</th>
                  @auth
                  <th>Action</th>
                  @endauth
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Semester</td>
                  <td>Tahun</td>
                  @auth
                  <td>Action</td>
                  @endauth
                </tr>
              </thead>
              <tbody>
              @foreach( $pkl as $p )
                <tr class="gradeA">
                  <td>{{$p->judul_pkl}}</td>
                  <td>{{$p->instansi_pkl}}</td>
                  <td>{!!$p->data_mhs!!}</td>
                  <td>{{$p->semester}}</td>
                  <td>{{$p->tahun}}</td>
                  @auth
                  <td class="actions">
                      <a href="{{ URL::to('/')}}/storage/{{$p->file_pkl}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="download" target="_blank"><i class="icon wb-download" aria-hidden="true"></i></a>
                  </td>
                  @endauth
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- end pandel tabel kkn -->
      @endsection
      

      @section('kkn')

      <div class="row" data-plugin="matchHeight" data-by-row="true">
          
          <div class="col-md-6">
            <!-- Card -->
            <div class="card card-block p-30 bg-blue-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_pkl}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Praktek Kerja Lapangan</div>
              </div>
            </div>
            <!-- End Card -->
          </div>
        
          <div class="col-lg-6">
            <!-- Card -->
            <div class="card card-block p-30 bg-red-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">{{$count_kkn}}</span>
                  <span class="counter-number-related text-capitalize">Laporan</span>
                </div>
                <div class="counter-label text-capitalize">Kuliah Kerja Nyata</div>
              </div>
            </div>
            <!-- End Card -->
          </div>

        </div>
      <!-- panel table pKL -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Daftar Laporan Kuliah Kerja Nyata</h3>
          </header>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-15">
                </div>
              </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="examplekkn">
              <thead>
                <tr>
                  <th>Nama Kelompok</th>
                  <th>No Kelompok</th>
                  <th>judul</th>
                  <th>Semester</th>
                  <th>Tahun</th>
                  @auth
                  <th>Action</th>
                  @endauth
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Semester</td>
                  <td>Tahun</td>
                  @auth
                  <td>Action</td>
                  @endauth
                </tr>
              </thead>
              <tbody>
              @foreach( $data as $d )
                <tr class="gradeA">
                  <td>{{$d->nama_kelompok}}</td>
                  <td>{{$d->no_kelompok}}</td>
                  <td>{{$d->judul_kkn}}</td>
                  <td>{{$d->semester}}</td>
                  <td>{{$d->tahun}}</td>
                  @auth
                  <td class="actions">
                      <a href="{{ URL::to('/')}}/storage/{{$d->file_kkn}}" class="btn btn-sm btn-icon btn-pure btn-default on-default download-row"
                      data-toggle="tooltip" data-original-title="download" target="_blank"><i class="icon wb-download" aria-hidden="true"></i></a>
                    </td>
                    @endauth
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table KKN -->
      @endsection