@extends('layouts.app')
<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 900px;
        margin: 20px auto;
    }
    .card {
        border-radius: 10px;
        padding: 20px;
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        /* color: #007bff; */
    }
    .btn {
        border-radius: 5px;
        padding: 8px 15px;
    }
    .btn-primary {
        background-color: #007bff;

        border: none;
    }
    .btn-warning {
        background-color: #ffc107;
        border: none;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: #fff;
    }
    .table th, .table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }
    .table th {
        background-color: #007bff;
        color: white;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .form-container {
        max-width: 600px;
        margin: 20px auto;
    }
    .btn{
        background-color:#007bff;
        border: none;
    }
</style>

@section('content')
<div class="container">
    <h2>Add New Book</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" class="form-control" placeholder="Title" required>
        <input type="text" name="author" class="form-control" placeholder="Author" required>
        <input type="number" name="year" class="form-control" placeholder="Year" required>
        <input type="text" name="isbn" class="form-control" placeholder="ISBN" required>
        <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
</div>
@endsection
