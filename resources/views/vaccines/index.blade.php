@extends('layouts.app')

@section('content')
    <h1>قائمة اللقاحات</h1>
    <a href="{{ route('vaccines.create') }}">إضافة لقاح جديد</a>
    <ul>
        @foreach ($vaccines as $vaccine)
            <li>{{ $vaccine->name }} - <a href="{{ route('vaccines.show', $vaccine) }}">عرض</a></li>
        @endforeach
    </ul>
@endsection