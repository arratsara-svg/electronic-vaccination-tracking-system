@extends('layouts.app')

@section('content')
    <h1>تفاصيل اللقاح</h1>

    <p><strong>اسم اللقاح:</strong> {{ $vaccine->name }}</p>

    <!-- يمكنك إضافة تفاصيل أخرى إذا كنت تخزن معلومات إضافية عن اللقاح -->

    <a href="{{ route('vaccines.index') }}">عودة إلى قائمة اللقاحات</a>
@endsection