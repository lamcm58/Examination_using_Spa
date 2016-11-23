@extends('admin.master')
@section('action','Danh Sách Câu Hỏi')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th style="width: 100px;">Mã Câu Hỏi</th>
                <th>Nội Dung Câu Hỏi</th>
                <th>Phương Án</th>
                <th style="width: 100px;">Mã Đề Thi</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cauhoi as $cau)
            <tr class="odd gradeX" align="center">
                <td>{!! $cau['id_cauhoi'] !!}</td>
                <td>{!! $cau['noi_dung'] !!}</td>
                <td class="center"><a href="{{ url('admin/cauhoi/view') }}/{{ $cau['id_cauhoi'] }}" class="btn btn-info"><i class="fa fa-eye  fa-fw"></i>Xem</a></td>
                <td>{!! $cau['id_dethi'] !!}</td>
                <!-- <td class="center"><a href="{{ url('admin/cauhoi/view') }}/{{ $cau['id_cauhoi'] }}" class="btn btn-info"><i class="fa fa-eye  fa-fw"></i>Xem</a></td> -->
                <td class="center"><a href="{{ url('admin/cauhoi/delete') }}/{{ $cau['id_cauhoi'] }}" onclick="return window.confirm('Bạn có chắc muốn xóa câu hỏi này ?')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i>Xóa</a></td>
                <td class="center"><a href="{{ url('admin/cauhoi/edit') }}/{{ $cau['id_cauhoi'] }}" class="btn btn-warning"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection