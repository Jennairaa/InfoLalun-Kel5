@extends('data.layout')
<style>
.maskot {
     position: absolute;
    top : 40%;
     left: 16%;
     transform: translateX(-50%);
     z-index: 0; /* Mengubah nilai z-index ke 0 */
     max-height: 100%;
     width: 350px;
}
</style>

<body>

<a href="home" class="btn btn-secondary mb-3" style="margin-top: 8%; margin-left: 3%; background-color : #1565c0; border:none;">
    <i class="bi bi-arrow-left"></i> Kembali
 </a>
 <div class="maskot">
 <img src="maskot4.png" alt="">
 </div>

@section('content')
 <link rel="stylesheet" href="/css/data.css">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Informasi Kecelakaan</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/data/create') }}" class="btn btn-success btn-sm" title="tambah data baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambahkan
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah Korban</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th> <!-- Tambahkan kolom untuk foto -->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->jumlah_korban }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            @if ($item->foto)
                                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Kecelakaan" style="width: 100px; height: auto;">
                                            @else
                                                Tidak ada foto
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/data/' . $item->id) }}" title="View Data"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/data/' . $item->id . '/edit') }}" title="Edit Data"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/data' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Data" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
