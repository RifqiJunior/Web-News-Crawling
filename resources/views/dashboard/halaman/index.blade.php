@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <p class="card-title">Kelola Artikel</p>

        <div class="pb-3"><a href="{{ route('halaman.create') }}" class="btn btn-primary"> + Tambah Artikel</a></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Judul</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>
                                <a href="{{ route('halaman.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form onsubmit="return confirm('Yakin hapus data?') "
                                    action="{{ route('halaman.destroy', $item->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit" name='submit'>DEL</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            {{-- <form action="/runpython" method="post">
            @csrf
            <button type="submit">scrap</button>
        </form>   --}}
        </div>
    </div>
@endsection