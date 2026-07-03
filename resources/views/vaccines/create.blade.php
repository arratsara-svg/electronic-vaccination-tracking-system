@extends('layouts.app')

@section('content')
    <h1>إضافة لقاح جديد</h1>
    <form action="{{ route('vaccines.store') }}" method="POST">
        @csrf
        <label>اسم اللقاح:</label>
        <input type="text" name="name" required>
        <label>الوصف:</label>
        <textarea name="description"></textarea>
        <label>تاريخ التوفر:</label>
        <input type="date" name="available_from" required>
        <button type="submit">حفظ</button>
    </form>
@endsection