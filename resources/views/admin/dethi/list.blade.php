@extends('admin.master')
@section('action','Danh Sách Đề Thi')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Mã Đề Thi</th>
                <th>Tên Đề Thi</th>
                <th>Số Câu Hỏi</th>
                <th>Mã Môn Thi</th>
                <!-- <th>Xem Câu Hỏi</th> -->
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dethi as $de)
            <tr class="odd gradeX" align="center">
                <td>{!! $de['id_dethi'] !!}</td>
                <td>{!! $de['ten_dethi'] !!}</td>
                <td>{!! $de['so_cauhoi'] !!}</td>
                <td>{!! $de['id_monthi'] !!}</td>
                <!-- <td class="center"><a href="{{ url('admin/dethi/view') }}/{{ $de['id_dethi'] }}" class="btn btn-info"><i class="fa fa-eye  fa-fw"></i>Xem</a></td> -->
                <td class="center"><a href="{{ url('admin/dethi/delete') }}/{{ $de['id_dethi'] }}" onclick="return window.confirm('Bạn có chắc muốn xóa đề thi này ?')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i>Xóa</a></td>
                <td class="center"><a href="{{ url('admin/dethi/edit') }}/{{ $de['id_dethi'] }}" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection