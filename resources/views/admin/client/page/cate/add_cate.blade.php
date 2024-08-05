@extends('admin.client.layout.master_layout')
@section('news_admin')

<div id="page-content">
                    <ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Thêm Danh Mục</a></li>
                    </ul>
                    <form action="/add_cate" method="POST">
                    <input class="form-control form-control-lg" type="text" name="ten" placeholder="Tên danh mục" aria-label=".form-control-lg example">
                    <br>
                    <input class="form-control form-control-lg" type="text" name="noidung" placeholder="nội dung" aria-label=".form-control-lg example">
              <br>
              
        <div class="list-btn">
            <button type="submit" name="add_cate" class="btn btn-outline-primary">Thêm Mới</button>
            @csrf
        </div>
        
        </form>
                </div>
@endsection