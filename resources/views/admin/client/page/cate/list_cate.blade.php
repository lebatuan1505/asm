@extends('admin.client.layout.master_layout')
@section('news_admin')
<div id="page-content">
<ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Danh Sách Danh Mục</a></li>
                    </ul>
                    <table class="table table-condensed" id="danhsach">
                        <thead>
                            <tr>
                                
                                <th class="text-center">#</th>
                                <th>Mã</th>
                                <!-- <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th> -->
                                <th class="hidden-xs hidden-sm">Tên Danh Mục</th>
                                <th class="hidden-xs hidden-sm">Ghi Chú</th>
                                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                           <!--Hiển thị danh sách sản phẩm-->
                           
                           @foreach($data as $i => $loaitin)

                           <tr>
                            <td class="text-center">{{++$i}}</td>
                            <td>{{$loaitin->id}}</a></td>
                            <td>{{$loaitin->ten}}</a></td>
                            <td>{{$loaitin->noidung}}</a></td>
                            <td class="text-center">
                                <div class="btn-group">         
                                    <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-info" data-original-title="Details"><i class="fa fa-info-circle"></i></a> -->
                                    <a href="{{route('capnhat_dm',['id'=>$loaitin->id])}}" data-toggle="tooltip" title="" class="btn btn-xs btn-success" data-original-title="Sửa"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('xoa_dm',['id'=>$loaitin->id])}}"  data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Xóa"><i class="fa fa-times"></i></a>
                                </div>

                            </td>
                     </tr>
                    @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
@endsection