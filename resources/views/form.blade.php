@extends('./layouts/main')
@section('container')

<div class="mt-3">
    <h2>Form Pemesanan Kendaraan</h2>
    <div class="mt-2">
        <form action="/submit" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Driver :</label>
                <input type="text" class="form-control" name="driver">
            </div>
            <div class="mb-3">
                <label class="form-label">Daerah :</label>
                <select class="form-select" aria-label="Default select example" name="region">
                    <option selected>Pilih salah satu</option>
                    @foreach ($regionList as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kendaraan :</label>
                <select class="form-select mb-3" aria-label="Default select example" name="vehicle">
                    <option selected>Pilih salah satu</option>
                    @foreach ($vehicleList as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">BBM yang dibutuhkan /liter:</label>
                <input type="number" class="form-control" name="bbm">
            </div>
            <button type="submit" class="btn my-btn2">PESAN</button>
        </form>
    </div>
</div>

@endsection