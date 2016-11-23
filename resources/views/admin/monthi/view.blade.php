@extends('admin.master')
@section('action','Xem Đề Thi')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>STT</th>
                <th>Mã Đề Thi</th>
                <th>Tên Đề Thi</th>
                <th>Số Câu Hỏi</th>
                <th>Xem Câu Hỏi</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt=0; ?>
            @foreach($dethi as $de)
            <?php $stt++; ?>
            <tr class="odd gradeX" align="center">
                <td>{!! $stt !!}</td>
                <td>{!! $de['id_dethi'] !!}</td>
                <td>{!! $de['ten_dethi'] !!}</td>
                <td>{!! $de['so_cauhoi'] !!}</td>
                <td class="center"><a href="{{ url('admin/department/view') }}/{{ $de['id_dethi'] }}" class="btn btn-info"><i class="fa fa-eye  fa-fw"></i>Xem</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection