@extends('layout.admin')

@section('content')
<form action="{{ route('category.update',$category->id) }}" method="POST">
@csrf
@method('PUT')

<div class="form-group">
    <label>Tên</label>
    <input type="text" name="name" 
           value="{{ $category->name }}" 
           class="form-control">
</div>

<div class="form-group">
    <label>Danh mục cha</label>
    <select name="parent_id" class="form-control">
        <option value="">-- Không có --</option>
        @foreach($parents as $p)
            <option value="{{ $p->id }}"
                {{ $category->parent_id == $p->id ? 'selected' : '' }}>
                {{ $p->name }}
            </option>
        @endforeach
    </select>
</div>

<button class="btn btn-success">Cập nhật</button>
</form>
@endsection
