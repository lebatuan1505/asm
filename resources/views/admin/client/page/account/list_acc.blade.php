@extends('admin.client.layout.master_layout')
@section('news_admin')
<div id="page-content">
<ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="active"><a href="">Danh Sách Tài Khoản</a></li>
                    </ul>
                    <table class="table table-condensed" id="danhsach">
                        <thead>
                            <tr>
                                
                                <th class="text-center">#</th>
                                <th>Mã</th>
                                <!-- <th class="hidden-xs hidden-sm"><i class="fa fa-envelope-o"></i> Email</th> -->
                                <th class="hidden-xs hidden-sm">Họ và Tên</th>
                                <th class="hidden-xs hidden-sm">Email</th>
                                <th class="hidden-xs hidden-sm">Thời gian tạo</th>
                                <!-- <th class="hidden-xs hidden-sm">Chức vụ</th> -->
                                <th class="cell-small text-center"><i class="fa fa-bolt"></i> Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                           <!--Hiển thị danh sách sản phẩm-->
                           
                              @foreach($data as $i => $user)
                           <tr>
                        
                            <td class="text-center">{{++$i}}</td>
                            <td>{{$user->id}}</a></td>
                            <td>{{$user->name}}</a></td>
                            <td>{{$user->email}}</a></td>
                            <td>{{$user->created_at}}</a></td>
                            <!-- <td>{{$user->id}}</a></td> -->

                            
                            <td class="text-center">
                                <div class="btn-group">         
                                    <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-xs btn-info" data-original-title="Details"><i class="fa fa-info-circle"></i></a> -->
                                    <a href="/update_cate" data-toggle="tooltip" title="" class="btn btn-xs btn-success" data-original-title="Sửa"><i class="fa fa-pencil"></i></a>
                                    <a href=""  data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Xóa"><i class="fa fa-times"></i></a>
                                </div>

                            </td>
                     </tr>
                    @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
@endsection