@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                                
                            <div class="form-group">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control" placeholder="Tambahkan NPM">
                            </div>

                            <div class="form-group">
                                <label for="">NAMA MAHASISWA</label>
                                <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Tambahkan Nama">
                            </div>

                            <div class="form-group">
                                <label for="">TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir">
                            </div>

                            <div class="form-group">
                                <label for="">TANGGAL LAHIR</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                            </div>

                            <div class="form-group">
                                <label for="">JENIS KELAMIN</label>
                                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Tambahkan Jenis Kelamin">
                            </div>

                            <div class="form-group">
                                <label for="">TELEPON</label>
                                <input type="text" name="telepon" class="form-control" placeholder="Tambahkan Telepon">
                            </div>

                            <div class="form-group">
                                <label for="">ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat" >
                            </div>
                            
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ Route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
