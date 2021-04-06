@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                @livewire('dropdowns')
                            </div>
                            <div class="col">
                                {{-- <div class="form-group">
                                    <label for="">Jumlah Kasus Reaktif Covid</label>
                                    <input type="number" class="form-control" name="reaktif" required>
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Jumlah Positif Covid</label>
                                    <input type="number" class="form-control" name="positif" @error('positif') is-invalid @enderror" value="{{ old('positif')}}" autofocus required>
                                    @error('positif')
                                    <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Sembuh Covid</label>
                                    <input type="number" class="form-control" name="sembuh" @error('sembuh') is-invalid @enderror" value="{{ old('sembuh')}}" autofocus required>
                                    @error('sembuh')
                                    <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Meninggal Covid</label>
                                    <input type="number" class="form-control" name="meninggal" @error('meninggal') is-invalid @enderror" value="{{ old('meninggal')}}" autofocus required>
                                    @error('meninggal')
                                    <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
