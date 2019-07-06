@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
<h1>Kategori</h1>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        Data Kategori
    </div>
    <div class="box-body">
        <table class="table table-bordered table-striped table-hover" id="category-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $('#category-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        url: window.SITE_URL + "admin/category",
        type: 'GET',
        },
        columns: [
        // {data: 'id', name: 'id', 'visible': false},
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
        { data: 'name', name: 'name' },
        { data: 'created_at', name: 'created_at' },
        {data: 'action', name: 'action', orderable: false},
        ],
        order: [[0, 'desc']]
    });
</script>
@stop