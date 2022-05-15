@extends('layout')
@section('content')
    <div id="upload">
        <div class="row">
            <x-validation-errors></x-validation-errors>
            <!-- upload -->
            <div class="col-md-8">
                <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
                <form action={{route('videos.store')}} method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label></label>
                            <input name="name" type="text" value="{{old("name")}}" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" name="length" value="{{old("length")}}" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" name="slug" value="{{old("slug")}}" class="form-control" placeholder="نام یکتا">
                        </div>
                        <div class="col-md-6">
                            <label>آدرس ویدیو</label>
                            <input type="text" name="url" value="{{old("url")}}" class="form-control" placeholder="آدرس ویدیو">
                        </div>
                        <div class="col-md-6">
                            <label>تصویر بند‌انگشتی</label>
                            <input type="text" name="thumbnail" {{old("thumbnail")}} class="form-control" placeholder="تصویر بند انگشتی">
                        </div>
                        <div class="col-md-12">
                            <label>توضیحات</label>
                            <textarea class="form-control" name="description"  value="{{old("description")}}" rows="4" placeholder="توضیح"></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div>
@endsection
