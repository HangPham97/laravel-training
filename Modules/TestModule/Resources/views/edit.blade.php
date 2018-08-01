@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <form   method="post" action="{{route('news.update',$news->news_id)}}" id="edit_form" enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="form-body col-md-12">
                <div class="col-md-8 left-bar">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">ID:
                            </h3>
                            <span style="padding-left: 10px; font-weight: 800;font-size: 18px">{{ old( 'id', $news->news_id) }}</span>
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

                            <input id="title" type="text" name="title" class="form-control" value="{{ old( 'title', $news->title) }}"/>

                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Sample
                            </h3>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad" style="">

                            <input id="sample" type="text" name="sample" class="form-control" value="{{ old( 'sample', $news->sample) }}"/>

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
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad" style="">

                            <textarea required name="news_content" id="content">
                               {{old('content',$news->content)}}
                            </textarea>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 right-bar">

                    <div class="box">
                        <div class="box-header box-img">
                            <h3 class="box-title">Image
                            </h3>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <input type="file" id="image" class="form-control file_val image-edit" name="image" value="" accept="image/*" onchange="readURL(this);">
                                <img  id="image-url" src="{{\Modules\TestModule\Entities\news::getDataUrl($news->image)}}" alt="" width="95%" height="180px">
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-header box-cate">
                            <h3 class="box-title">Category
                            </h3>
                            <div class="box-body pad" style="">
                                @foreach($cate_name as $cate)
                                    <?php $checked = 0 ?>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            @foreach($cate_name_of_news as $cate_name_of_new)
                                                @if($cate_name_of_new->cate_id == $cate->cate_id)
                                                    <?php $checked = 1?>
                                                @endif
                                            @endforeach
                                            @if($checked == 1)
                                                <input class="form-check-input" name="cate[]" type="checkbox" checked="checked" id="{{$cate->id}}" value="{{$cate->cate_id}}"> {{$cate->name}}
                                            @else
                                                <input class="form-check-input" name="cate[]" type="checkbox" id="{{$cate->id}}" value="{{$cate->cate_id}}"> {{$cate->name}}
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-input"><input type="submit" class="btn btn-block btn-info btn-flat" value="Submit"></div>
        </form>
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#edit_form').on("submit",function(e){
                var title = $('#title').val();
                var sample = $('#sample').val();
                var content = CKEDITOR.instances['content'].getData();
                $(".error").remove();
                if(title.length < 10){
                    $('#title').before('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (sample.length < 10){
                    $('#sample').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (content.length < 10){
                    $('#content').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
            })
        })
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('image-url').src =  e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        CKEDITOR.replace('content')

        $(function() {
            $('#content').ckeditor({
                toolbar: 'Full',
                enterMode : CKEDITOR.ENTER_BR,
                shiftEnterMode: CKEDITOR.ENTER_P,
            });
        });

        CKEDITOR.on( 'instanceReady', function( ev ) {
            // Ends self-closing tags the HTML4 way, like <br>.
            ev.editor.dataProcessor.writer.selfClosingEnd = '>';
        });
    </script>
@endsection