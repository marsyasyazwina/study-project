<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <
    
    <div class="container mt-2">
        <div class="row">
            <div class="row">
                <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Data Kelas </h2>
            </div>
            <div class="pull-right mb-2">
                {{-- ini url diroute yang buat nampilin form create data --}}
                <a class="btn btn-success" href="{{ url('/kelas/data/create') }}"> Create data Kelas</a>
            </div>
        </div>
        @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p> {{ $message }}</p>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Lesson</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            {{--  variable $data ini diambil dari method index di KelasController --}} 
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->lesson }}</td>
                <td>{{ $item->time }}</td>
                <td>
                    {{-- route aksi untuk hapus --}}
                    <form action="{{ url("/kelas/$item->id") }}" method="post">
                        {{-- route aksi untuk edit --}}
                        <a class="btn btn-primary" href="{{ url("/kelas/$item->id/edit") }}"> Edit</a>
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        
</body>
</html>