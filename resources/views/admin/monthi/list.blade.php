@extends('admin.master')
@section('action','Danh Sách Môn Thi')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Mã Môn Thi</th>
                <th>Tên Môn Thi</th>
                <th>Số Đề Thi</th>
                <!-- <th>Xem Đề Thi</th> -->
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monthi as $mon)
            <tr class="odd gradeX" align="center">
                <td>{!! $mon['id_monthi'] !!}</td>
                <td>{!! $mon['ten_monthi'] !!}</td>
                <td>{!! $mon['so_dethi'] !!}</td>
                <!-- <td class="center"><a href="{{ url('admin/monthi/view') }}/{{ $mon['id_monthi'] }}" class="btn btn-info"><i class="fa fa-eye  fa-fw"></i>Xem</a></td> -->
                <td class="center"><a href="{{ url('admin/monthi/delete') }}/{{ $mon['id_monthi'] }}" onclick="return window.confirm('Bạn có chắc muốn xóa môn thi này ?')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i>Xóa</a></td>
                <td class="center"><a href="{{ url('admin/monthi/edit') }}/{{ $mon['id_monthi'] }}" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection