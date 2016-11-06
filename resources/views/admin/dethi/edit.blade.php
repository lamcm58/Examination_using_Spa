@extends('admin.master')
@section('action','Sửa Đề Thi')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label for="id_dethi">Mã Đề Thi</label>
                <input class="form-control" name="id_dethi" id="id_dethi" placeholder="Vui Lòng Điền Mã Đề Thi" value="{!! old('id_dethi',isset($dethi)?$dethi['id_dethi']:null) !!}" required />
            </div>
            <div class="form-group">
                <label for="ten_dethi">Tên Đề Thi</label>
                <input class="form-control" name="ten_dethi" id="ten_dethi" placeholder="Vui Lòng Điền Mã Đề Thi" value="{!! old('ten_dethi',isset($dethi)?$dethi['ten_dethi']:null) !!}" required />
            </div>
            <div class="form-group">
                <label for="id_monthi">Tên Môn Thi</label>
                <select class="form-control" name="id_monthi" id="id_monthi">
                    <option value="">Vui Lòng Chọn Môn Thi</option>
                    @foreach($monthi as $mon)
                    <option value="{!! $mon['id_monthi'] !!}" {!! $mon['id_monthi'] == $dethi['id_monthi'] ? 'selected' : '' !!}>{!! $mon['ten_monthi'] !!}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
@endsection