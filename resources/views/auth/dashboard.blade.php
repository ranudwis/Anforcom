@if (session('status'))
<div>
    {{session('status')}}
</div>
@endif

Nama Tim : {{Auth::user()->team->name}}<br>
Nama Ketua : {{Auth::user()->name}}<br>
Anggota : <br>
@foreach (Auth::user()->team->members as $member)
{{ $member->name }}<br>
@endforeach

<a href="/logout">Logout</a>