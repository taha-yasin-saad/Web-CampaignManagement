@extends('layouts.admin')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">
                    @if(isset($data))
                    تعديل الماركة
                    @else
                    إضافة الماركة
                    @endif
                </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                        class="ti-settings text-white"></i></button>
                <a 
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">لوحة
                    التحكم</a>
                <ol class="breadcrumb">
                    <li class="active">
                        @if(isset($data))
                        تعديل الماركة
                        @else
                        إضافة الماركة
                        @endif
                    </li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="add-product">
                        <h3>
                            @if(isset($data))
                            تعديل الماركة
                            @else
                            إضافة الماركة
                            @endif
                        </h3>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                            @if(isset($data))
                                action="{{url('mark/'.$data->id)}}"
                            @else
                                action="{{url('mark/')}}"
                            @endif
                            >
                            {{csrf_field()}}
                            @if(isset($data))
                                @method('PATCH')
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <label class="control-label">العنوان</label>
                                        <input required type="text" class="form-control" value="@if(isset($data)) {{$data->title}} @endif"
                                            name="title" />
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-sm-6 ol-md-6 col-xs-12">
                                        <div class="white-box">
                                            <h3 class="box-title">الصورة</h3>
                                            <label for="input-file-max-fs">اكبر حجم للصورة 5 ميجا</label>

                                            <input @if(!isset($data)) required @endif  type="file" id="input-file-max-fs" accept="image/*" name="image"
                                                class="dropify"
                                                data-default-file="@if(isset($data)){{asset('uploads/'.$data->image)}}@endif"
                                                data-max-file-size="5M" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions m-t-40">
                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i>
                                        حفظ</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
