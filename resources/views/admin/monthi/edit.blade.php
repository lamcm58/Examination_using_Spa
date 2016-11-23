@extends('admin.master')
@section('action','Sửa Môn Thi')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label for="id_monthi">Mã Môn Thi</label>
                <input class="form-control" name="id_monthi" id="id_monthi" placeholder="Vui Lòng Điền Mã Môn Thi" value="{!! old('id_monthi',isset($monthi)?$monthi['id_monthi']:null) !!}" required />
              
            </div>
            <div class="form-group">
                <label for="ten_monthi">Tên Môn Thi</label>
                <input class="form-control" name="ten_monthi" id="ten_monthi" placeholder="Vui Lòng Điền Mã Môn Thi" value="{!! old('ten_monthi',isset($monthi)?$monthi['ten_monthi']:null) !!}" required />
              
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
@endsection