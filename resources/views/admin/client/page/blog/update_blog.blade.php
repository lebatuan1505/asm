@extends('admin.client.layout.master_layout')
@section('news_admin')

<div id="page-content">
                    <ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Cập Nhật Bài viết</a></li>
                    </ul>
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                    @method('put')
                    <input class="form-control form-control-lg" type="text" value="{{$tin-> tieuDe}}" name="tieuDe" placeholder="Tiêu đề" aria-label=".form-control-lg example">
                    <br>
                    <textarea id="example-textarea"  name="tomTat" placeholder="Tóm tắt" class="form-control" rows="3">{{$tin-> tomTat}}</textarea>
                    <br>

                    <div class="form-group">
                                <label class="control-label col-md-2" for="example-textarea-editor">Nội dung bài viết</label>
                                <div class="col-md-10">
                                    <textarea id="example-textarea-ckeditor"  name="noiDung"  class="ckeditor " rows="10">{{$tin->noiDung}}</textarea>
                                    
                                </div>
                            </div>
                            
                                <label class="control-label col-md-12" for="example-select">Chọn Loại</label>
                                <div class="col-md-2">
                                    <select id="example-select"  name="idLT" class="form-control">
                                        @foreach($show as $show_data)
                                    <option value="{{$show_data -> id}}">{{$show_data -> ten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <br>
                                <input class="form-control form-control-lg col-md-12" value="{{$tin-> tacGia}}"  type="text" name="tacGia" placeholder="Tác giả" aria-label=".form-control-lg example">
                                <div class="row">  
                                <div class="form-group">
                               
                                <!-- <div class="col-md-2 col-md-offset-2">
                                    <div class="input-group date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                                        <input type="text" id="example-input-datepicker2" name="example-input-datepicker2" placeholder="Ngày đăng" class="form-control form-control-lg">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div> -->
                                
                                <div class="form-group">
                                <label class="control-label col-md-2" for="example-file">Ảnh đại diện bài viết</label>
                                <div class="col-md-4">
                                    <input type="file" id="example-file" name="Hinh" class="form-control">
                                </div>
                            </div>
                                
                            </div>
                            </div> 
                                
                            
                            <!-- CKEditor, you just need to include the plugin (see at the bottom of this page) and add the class 'ckeditor' to your textarea -->
                            <!-- More info can be found at http://ckeditor.com -->
                            
                           
                            
                    
                    
              
        <div class="list-btn">
            <button type="submit" name="add_cate" class="btn btn-outline-primary">Cập Nhật</button>
        
        </div>
        @csrf
        </form>
                </div>
@endsection