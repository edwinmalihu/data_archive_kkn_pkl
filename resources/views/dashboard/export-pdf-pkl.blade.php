<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

h3{
  text-align:center;
}
</style>
</head>
<body>

  
  <!-- INI GAMBAR ADA DI ASSET -->
  <!-- <img style ="width: 75; position: fixed;" src="{{asset('clasic/topbar/assets/images/LOGO-UNMUS-1.png')}}" alt=""> -->
  <img style ="width: 50; position: fixed;" src="{{public_path('storage/logo/LOGO-UNMUS-1.png')}}" alt="">
  
  <table style="text-align:center; width:100%">
    <tr style="font-weight: bold"> 
      <td>KEMENTERIAN PENDIDIKAN KEBUDAYAAN, RISET DAN TEKNOLOGI</td>
    </tr>
    <tr style="font-weight: bold">
      <td>UNIVERSITAS MUSAMUS FAKULTAS TEKNIK</td>
    </tr>
    <tr style="font-weight: bold">
      <td>JURUSAN TEKNIK INFORMATIKA</td>
    </tr>
    <tr style="font-style: italic">
      <td>Jalan Kamizaun Mopah Lama Merauke 99611</td>
    </tr>
    <tr style="font-style: italic">
      <td>Email : Informatics@unmus.ac.id</td>
    </tr>
    <td><hr style="border: solid;"></td>
  </table>    
  
  <h3>{{ $title }}</h3>
  <p>Tanggal Download. {{ $date }}</p>

<table id="customers">
  <tr>
    <th>Judul</th>
    <th>Instansi</th>
    <th>Nama & NPM</th>
    <th>Semester</th>
    <th>Tahun</th>
  </tr>
  @foreach ($pkl_report as $result)
  <tr>
    <td>{{$result->judul_pkl}}</td>
    <td>{{$result->instansi_pkl}}</td>
    <td>{!!$result->data_mhs!!}</td>
    <td>{{$result->semester}}</td>
    <td>{{$result->tahun}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>

