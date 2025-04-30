<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
</head>
<h2>Download Hasil {{ $jenisTes }} Per Kelas</h2>

<ul>
    @foreach ($files as $file)
        <li><a href="{{ asset($file) }}" download>{{ basename($file) }}</a></li>
    @endforeach
</ul>
