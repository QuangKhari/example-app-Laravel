@extends('layout.admin')

@section('content')
<a href="{{ route('category.create') }}" class="btn btn-primary mb-3">
    Thêm mới
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Cha</th>
        <th>Trạng thái</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->parent?->name ?? '---' }}</td>
        <td>{{ $c->is_active ? 'Hiện' : 'Ẩn' }}</td>
        <td>
            <a href="{{ route('category.edit',$c->id) }}" class="btn btn-warning btn-sm">Sửa</a>

            <form action="{{ route('category.destroy',$c->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
