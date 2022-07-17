@extends('admin.layouts.app')

@section('title', 'Dashboard Data Pegawai')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#modalTambah">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Pegawai
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pegawai.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_pegawai" placeholder="Nama lengkap ...">
                </div>

                <div class="form-group">
                    <label for="">Jabatan</label>
                    <select name="id_jabatan" class="form-control" id="">
                        <option value="">Pilih jabatan</option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Golongan</label>
                    <select name="id_golongan" class="form-control" id="">
                        <option value="">Pilih Golongan</option>
                        @foreach ($golongan as $item)
                            <option value="{{ $item->id }}">Rp {{ $item->tunjangan_menikah }} - Rp
                                {{ $item->tunjangan_anak }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="Status ...">
                </div>

                <div class="form-group">
                    <label for="">Jumlah Anak</label>
                    <input type="number" class="form-control" name="jumlah_anak" placeholder="Jumlah Anak ...">
                </div>

                <button type="submit" class="btn btn-primary float-right mt-3">Tambah</button>
            </form>
        </div>
    </div>

@endsection
