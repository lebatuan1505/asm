@extends('admin.client.layout.master_layout')
@section('news_admin')

<div id="page-content">
                    <ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Cập Nhật Danh Mục</a></li>
                    </ul>
                    
                    <form action="" method="POST">
                    <input class="form-control form-control-lg" value="{{$danhmuc -> ten}}" type="text" name="ten" placeholder="Cập nhật tên danh mục" aria-label=".form-control-lg example">
                    <br>
                    <input class="form-control form-control-lg" value="{{$danhmuc-> noidung}}" type="text" name="noidung" placeholder="Cập nhật tóm tắt" aria-label=".form-control-lg example">
              <br>
              
        <div class="list-btn">
            <button type="submit" name="add_cate" class="btn btn-outline-primary">Cập Nhật</button>
            @csrf
        </div>
        
        </form>
                </div>
@endsection