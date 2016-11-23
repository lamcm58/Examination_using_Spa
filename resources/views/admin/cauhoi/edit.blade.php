@extends('admin.master')
@section('action','Thêm Câu Hỏi')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="form-group">
                <label for="id_dethi">Tên Đề Thi</label>
                <select class="form-control" name="id_dethi" id="id_dethi">
                    <option value="">Vui Lòng Chọn Đề Thi</option>
                    @foreach($dethi as $de)
                    <option value="{!! $de['id_dethi'] !!}" {!! $de['id_dethi'] == $cauhoi['id_dethi'] ? 'selected' : '' !!}>{!! $de['ten_dethi'] !!}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_cauhoi">Mã Câu Hỏi</label>
                <input class="form-control" name="id_cauhoi" id="id_cauhoi" placeholder="Vui Lòng Điền Mã Câu Hỏi" value="{!! old('id_cauhoi',isset($cauhoi)?$cauhoi['id_cauhoi']:null) !!}" required />
            </div>
            <div class="form-group">
                <label for="noi_dung">Nội Dung Câu Hỏi</label>
                <textarea name="noi_dung" id="noi_dung" class="form-control" style="height: 250px;" value="{!! old('noi_dung',isset($cauhoi)?$cauhoi['noi_dung']:null) !!}"></textarea>
                <script type="text/javascript">
                    CKEDITOR.replace("noi_dung");
                </script>
            </div>
            @for($i = 65; $i <= 68; $i++)
            <div class="form-group">
                <label for="{{ 'phuong_an'.$i }}">Phương án {!! chr($i) !!} 
                    {!! Form::select('dungsai'.$i, array( '0' => 'Sai','1' => 'Đúng')) !!}
                </label>
                <input class="form-control" name="{{ 'phuong_an'.$i }}" id="{{ 'phuong_an'.$i }}" placeholder="Vui Lòng Điền Câu Trả Lời" required />
            </div>
            @endfor
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
@endsection