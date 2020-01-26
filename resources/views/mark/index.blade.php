@extends('layouts.admin')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">الماركات</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                        class="ti-settings text-white"></i></button>
                <a
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">لوحة
                    التحكم</a>
                <ol class="breadcrumb">
                    <li class="active">الماركات</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">الماركات</h3>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>الصورة</th>
                                    <th>العنوان</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="show-products">
                                @foreach ($data as $value)
                                <tr row="1" data-table="marks">
                                    <th scope="row">
                                        {{$value->id}}
                                    </th>
                                    <td>
                                        <a class="image-popup-no-margins" href="#" title="">
                                            <img class="avatar" src="{{asset('uploads/'.$value->image)}}"
                                                width="150px" />
                                        </a>
                                    </td>
                                    <td>{{$value->title}}</td>
                                    <td></td>
                                    <td class="product-option">
                                        <a href="{{url('mark/'.$value->id . '/edit')}}"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5 ">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>                                            
                                        </a>
                                        <a class="trash" onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$value->id}}').submit();}"><i class='fa fa-trash-o'></i></a>
                                        <form method="post" id="delete-row{{$value->id}}"
                                                action="{{ url('mark/'.$value->id) }}"
                                                style="display: none;">
                                            <input name="_method" type="hidden" value="DELETE">
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
    @endsection
