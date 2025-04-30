@extends('layouts.main_materi')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', $title . ' - ThinkSearch')

@section('content')
<div>
    {!! $materi !!}
</div>
<div class="d-flex justify-content-between my-2">
    @if ($btnSebelumnya != false)
        <a href="{{ route('siswa.materi', ['bab' => $bab, 'page' => $page - 1]) }}" class="btn btn-danger"
            id="btnSebelumnya"><i class="bi bi-chevron-left"></i> Sebelumnya</a>
    @endif
    
    <div class="ms-auto">
        @if ($btnSelanjutnya['type'] == 'page')
            <a href="{{ $btnSelanjutnya['url'] }}" class="btn btn-primary" id="btnSelanjutnya">Selanjutnya</a>
        @endif
        @if ($btnSelanjutnya['type'] == 'bab')
            <a href="{{ $btnSelanjutnya['url'] }}" class="btn btn-primary" id="btnSelanjutnya">Selanjutnya</a>
        @endif
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>