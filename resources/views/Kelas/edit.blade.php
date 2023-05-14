<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit company form - Project Data Kelas </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
                <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Edit Company </h2>
            </div>
            <div class="pull-right ">
                {{-- ini url diroute yang buat nampilin form create data --}}
                <a class="btn btn-primary" href="{{ url('/kelas') }}" enctype="multipart/form-data"> Back </a>
            </div>
        </div>
        </div>
        @if (session('status'))
        <div class="alert alert-succes mb-1 mt-1">
            {{ session('status') }}
        @endif
        <form action="{{ url("/kelas/$kelas->id") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Lesson :</strong>
                        <input type="text" name="lesson" class="form-control" placeholder="Lesson"
                        value="{{ old('lesson', $kelas->lesson) }}">
                        @error('lesson')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Time :</strong>
                        <input type="text" name="time" value="{{ $kelas->time }}"
                        class="form-control" placeholder="Time">
                        @error('time')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
        </div>
</body>
</html>