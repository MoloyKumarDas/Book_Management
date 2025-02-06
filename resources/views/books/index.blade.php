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
        /* background-color:#007bff; */
        background-color: #ffc107;

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
</style>

@section('content')
<div class="container">
    <h2>Book List</h2>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
    <table class="table mt-3">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>ISBN</th>
            <th>Actions</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->isbn }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

