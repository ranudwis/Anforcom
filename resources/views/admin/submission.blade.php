@extends('admin.partial.main')

@section('title', 'Submission')

@section('content')
Submisson Task
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{session('status')}}
</div>
@endif
<div class="display-task">
    <h3>List Tugas</h3>
    <table border="1">
        <tr>
            <th>Nama Team</th>
            <th>Status</th>
            <th>Link Tugas</th>
        </tr>
        @foreach($teams as $team)
        <tr>
            <td>
                {{$team->name}}
            </td>

            <td>
                @if($team->file)
                Sudah Mengumpulkan
                @else
                Belum Mengumpulkan
                @endif
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection