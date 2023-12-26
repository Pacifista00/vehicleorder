@extends('./layouts/main')
@section('container')

<div class="mt-3">
    <h2>Riwayat Pemesanan</h2>
    <form action="/export" method="GET">
      <button type="submit" class="btn my-btn2">Unduh Laporan Peminjaman</button>
    </form>
    <small class="text-secondary">nb : unduh laporan hanya berisi peminjaman yang sudah selesai/yang bestatus "done"</small>
    <div class="table-responsive mt-3">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">Waktu Pengajuan</th>
                <th scope="col">Nama Driver</th>
                <th scope="col">Daerah</th>
                <th scope="col">Jenis</th>
                <th scope="col">Konsumsi BBM</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orderHistory as $item)    
              <tr>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->driver }}</td>
                <td>{{ $item->region->name }}</td>
                <td>{{ $item->vehicle->name }}</td>
                <td>{{ $item->bbm }}</td>
                @if ($item->status_id == 1)
                  <td class="my-bg-warning">{{ $item->status->name }}</td>
                @elseif($item->status_id == 2)
                  <td class="my-bg-danger">{{ $item->status->name }}</td>
                @elseif($item->status_id == 3)
                  <td class="my-bg-success">{{ $item->status->name }}</td>
                @elseif($item->status_id == 4)
                  <td class="bg-secondary">{{ $item->status->name }}</td>
                @endif 
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection