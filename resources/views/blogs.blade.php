@extends('layout')

@section('title', 'บทความ')

@section('content')
    <h2 class="text-center">
        บทความ</h2>

    <table class="table table-bordered text-center ">
        <thead>
            <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->content, 20) }}</td>
                    <td>
                        @if ($item->status == true)
                            <span class="btn btn-primary">สถานะ : เผยแพร่</span>
                        @else
                            <p class="btn btn-danger">สถานะ : ไม่เผยแพร่</p>
                        @endif
                    </td>
                    <td><a onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?')" href="/delete/{{ $item->id }}"
                            class="btn btn-danger">ลบ</a></td>
            @endforeach
        </tbody>
    </table>

    {{-- @foreach ($blogs as $item)
        <h2>{{ $item->title }}</h2>
        <p>{{ Str::limit($item->content, 10) }}</p>
        <hr>
        @if ($item->status == true)
            <p class="text-success">สถานะ : เผยแพร่</p>
        @else
            <p class="text-danger">สถานะ : ไม่เผยแพร่</p>
        @endif
    @endforeach --}}
@endsection
