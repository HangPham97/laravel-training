@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper add-wrapper" >

        <form class="col-md-offset-2 col-md-8" id="edit_form" method="post" action="{{route('news.store')}}" >
            {{csrf_field()}}

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ID
                    </h3>
                    <span style="color:red; padding-left: 20px;">{{Session('success')}}</span>
                    <div class="box-body pad" style="">
                        <input id="news_id" type="text" required name="news_id" value="{{old('news_id')}}" class="form-control"/>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Title
                    </h3>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad" style="">

                        <input id="title" type="text" name="title" class="form-control" value="{{old('title')}}"/>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sample
                    </h3>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <input id="sample" type="text" name="sample" class="form-control" value="{{old('sample')}}"/>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Content
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad" style="">
                        <input type="hidden" id="hidden_content" value="{{old('hidden_content')}}">
                        <textarea name="news_content" id="content" >
                            
                        </textarea>

                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Category
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <div class="box-body pad cate-pad" style="">
                        @foreach($cate_name as $cate)
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                        <input class="form-check-input" name="cate[]"  type="checkbox" id="{{$cate->id}}" value="{{$cate->cate_id}}"> {{$cate->name}}
                                </label>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="submit-input"><input type="submit" class="btn btn-block btn-info btn-flat" value="Submit"></div>

        </form>
    </div>
@endsection
@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#edit_form').on("submit",function(e){
                var news_id = $('#news_id').val();
                var title = $('#title').val();
                var sample = $('#sample').val();
                var content = CKEDITOR.instances['content'].getData();
                $(".error").remove();
                if(news_id.length < 5){
                    $('#news_id').before('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    $('#edit_form').attr('onsubmit', 'return false');
                }
                if(title.length < 10){
                    $('#title').before('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    $('#edit_form').attr('onsubmit', 'return false');
                }
                if (sample.length < 10){
                    $('#sample').after('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    $('#edit_form').attr('onsubmit', 'return false');
                }
                if (content.length < 10){
                    $('#content').after('<span class="error" style="color: red; padding-bottom: 5px;">This field must be long than 10 charaters</span>');
                    $('#edit_form').attr('onsubmit', 'return false');
                }

                var content = CKEDITOR.instances['content'].getData();
                $('#hidden_content').val(content);

            })

            var content = $('#hidden_content').val();
            CKEDITOR.instances['content'].setData(content);
        })
    </script>
@endsection