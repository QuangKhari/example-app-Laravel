@extends('layout.admin')

@section('content')
<form action="{{ route('category.store') }}" method="POST">
@csrf

<div class="form-group">
    <label>Tên</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label>Danh mục cha</label>
    <select name="parent_id" class="form-control">
        <option value="">-- Không có --</option>
        @foreach($parents as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
        @endforeach
    </select>
</div>

<button class="btn btn-primary">Lưu</button>
</form>
@endsection
