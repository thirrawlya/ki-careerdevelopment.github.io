@extends('layout.main')
@section('content')


<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5">
    <div class="w-100 me-4">
        <h5 class="fw-bold">
        <i class="fas fa-arrow-left me-2"></i>
        DAFTAR INVENTORY
        </h5>
        <!-- form pencarian -->
 <div class="form-group mb-4">

<div class="input-group">
<span class="input-group-text">
            <i class="fas fa-magnifying-glass"></i>
        </span>
    <input type="text" class="form-control" placeholder="Cari Inventoris">
    <div class="col-6 ms-3">
                <button class="btn btn-light"><i class="fas fa-filter"> Filter</i></button>
                <button class="btn btn-light"><i class="fas fa-trash"></i></button>
    </div>
    <div class="col-2  justify-content-end">
            <button class="btn btn-dark"><i class="fas fa-add">Tambah Aset</i></button>
    </div>
</div>
<!-- end form -->


<div>
    <table class="table table-striped table-hover">
    <caption>List of users</caption>
    <thead>
                <th><input type="checkbox" class="form-check-input mt-0"></th>
                <th>Nama Aset</th>
                <th>Jenis Aset</th>
                <th>Harga Satuan (IDR.)</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
    <tbody>
        <tr>
        <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
        <td>Mark</td>
        <td>Otto</td>
        <td>5000</td>
        <td><a class="btn btn-sm btn-outline-success">Aktif</a></td>
        <td>
        <a class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a> 
        <a class="btn btn-sm btn-dark"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        <tr>
        <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>5000</td>
        <td><a class="btn btn-sm btn-outline-success">Aktif</a></td>
        <td>
            <a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a> 
             <a href="" class="btn btn-sm btn-dark"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
        <tr>
        <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>5000</td>
        <td><a class="btn btn-sm btn-outline-success">Aktif</a></td>
        <td>
            <a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a> 
             <a href="" class="btn btn-sm btn-dark"><i class="fas fa-trash"></i></a></td>
        </tr>
    </tbody>
    </table>
     </div>
    </div>
</div>


@endsection