@extends('./layouts/main')
@section('container')

<div class="mt-3">
    <h2>Jadwal Service</h2>
    <div class="mt-3 border">
        @foreach ($serviceSchedule as $item)
        {{-- untuk superior --}}
            @if ($user->id == 1)
                <div class="list-group-item d-flex justify-content-between align-items-start my-2">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $item->vehicle->name }}</div>
                    @if ($now < new DateTime($item->scheduled_date))
                        <small class="my-bg-success">Sudah Service</small>
                        <p class="">Kendaraan ini telah menjalani proses servis secara teratur dan berkala.</p>
                    @else
                        <small class="my-bg-danger">Belum Service</small>
                        <p class="">Segera menjadwalkan servis untuk menjaga kondisi optimal kendaraan.</p>
                    @endif
                    </div>
                </div>
            @else
                <div class="list-group mt-2">
                    <div class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between mt-1">
                        <h5 class="mb-3">{{ $item->vehicle->name }}</h5>
                        <small>
                        <form action="/service/{{ $item->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn my-btn2 @if (new DateTime() < new DateTime($item->scheduled_date))
                                disabled
                            @endif ">SERVICE</button>
                        </form>
                        </small>
                    </div>
                    <div class="mb-2">
                            @if ($now < new DateTime($item->scheduled_date))
                                <p class="m-0">Saat ini belum waktunya Service <i class="fa-solid fa-check text-success"></i></p>
                            @else
                                <p class="m-0">Segera Service kendaraan! <i class="fa-solid fa-xmark text-danger"></i></p>
                            @endif
                        <small>Tanggal Service : {{ date_format(new DateTime($item->scheduled_date), 'Y/F/d') }}</small>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

@endsection