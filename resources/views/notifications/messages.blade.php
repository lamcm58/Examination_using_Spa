@if(Session::has('success'))
    <div class="alert alert-success">
        <strong>Thành công!! </strong>{!! Session::get('success') !!}
    </div>
@elseif(Session::has('danger'))
    <div class="alert alert-danger">
        <strong>Xin Lỗi!! </strong>{!! Session::get('danger') !!}
    </div>
@endif