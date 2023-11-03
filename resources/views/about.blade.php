@extends('layouts.main')

@section('content')
<h2>Halaman About</h2>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">
@endsection