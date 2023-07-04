@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-2">
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary">Tambah</button>
                    <button class="btn btn-primary">Import</button>
                    <button class="btn btn-primary">Export</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <input type="text" class="form-control" placeholder="Cari">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 w-full text-center">
                <select class="form-select ">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
    </div>
@endsection
