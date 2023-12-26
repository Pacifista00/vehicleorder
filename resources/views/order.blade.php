@extends('./layouts/main')
@section('container')

<div class="mt-3">
    <h2>Daftar Pengajuan Peminjaman Kendaraan</h2>
    <div class="mt-3">
        <div class="row">
            @foreach ($orderList as $item)
            <div class="col-md-4">
                <div class="card mb-3" >
                    <div class="card-body">
                        <h5 class="card-title">{{ date_format($item->created_at,"d-F-d H:i:s") }}</h5>
                        <h6 class="card-subtitle text-body-secondary">Nama Driver : {{ $item->driver }}</h6>
                        {{-- untuk admin --}}
                        @if ($item->status_id == 1)
                            <p>Status : 
                                <span class="my-bg-warning">
                                    {{ $item->status->name }}
                                </span>
                            </p>
                        @elseif($item->status_id == 2)
                            <p>Status : 
                                <span class="my-bg-danger">
                                    {{ $item->status->name }}
                                </span>
                            </p>
                        @elseif($item->status_id == 3)
                            <p>Status : 
                                <span class="my-bg-success">
                                    {{ $item->status->name }}
                                </span>
                            </p>
                        @elseif($item->status_id == 4)
                            <p>Status : 
                                <span class="bg-secondary">
                                    {{ $item->status->name }}
                                </span>
                            </p>
                        @endif
                        <small>
                            <p class="card-text m-0">Daerah : {{ $item->region->name }}</p>
                            <p class="card-text m-0">Jenis Kendaraan : {{ $item->vehicle->name }}</p>
                            <p class="card-text m-0">BBM yang dibutuhkan : {{ $item->bbm }} liter</p>
                        </small>
                       
                    <div class="mt-3">
                        {{-- untuk superior --}}
                        @if ($user->id == 1)
                        <div class="d-flex">
                            @if ($item->status_id == 1)
                                <form action="/reject/{{$item->id}}" method="POST">
                                    @csrf
                                    <button class="btn my-bg-danger me-2">TOLAK</button>
                                </form>
                                <form action="/accept/{{$item->id}}" method="POST">
                                    @csrf
                                    <button class="btn my-bg-success">SETUJU</button>
                                </form>
                            @elseif ($item->status_id == 2)
                                <h4 class="text-danger">DITOLAK</h4>
                            @elseif ($item->status_id == 3)
                                <h4 class="text-success">DISETUJUI</h4>
                            @elseif ($item->status_id == 4)
                                <h4 class="text-secondary">SELESAI</h4>
                            @endif
                        </div>
                        @else
                            @if($item->status_id == 3)
                            <form action="/done/{{$item->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn my-btn2" style="width: 100%">Selesai</button>
                            </form>
                            @endif  
                        @endif
                        
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection