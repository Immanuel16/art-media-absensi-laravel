@extends('layout.public_layout')
@section('title', 'Data Pelayanan Januari 2022')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-12">
                    <form action="/data-pelayanan/search" method="get" autocomplete="off">
                        <input type="text" name="cari" placeholder="Search..." value="{{ old('cari') }}">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12" align="center">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Nama</th>
                                <th>Tanggal</th>
                                {{-- <th>Sudah Vaksin</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($crews) > 0)
                                @foreach ($crews as $crew)
                                    <tr>
                                        <td style="text-transform: capitalize">{{ $crew->fullname }}</td>
                                        <td>{{ $crew->tanggal }}</td>
                                        {{-- <td style="text-transform: capitalize">{{ $crew->hasVaccinated }}</td> --}}
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" style="text-align: center !important;font-weight:600;color:red">
                                        Data not found
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="row mt-3">
                <div class="col-md-12" align="right">
                    <div class="" style="justify-content: center">
                        {{ $crews->links() }}
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-12" align="center">
                    Halaman <span style="font-weight: 600">{{ $crews->currentPage() }}</span> dari <span style="font-weight: 600">{{ $crews->lastPage() }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection