@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <form   method="post" action="{{route('cate.update',$cate->cate_id)}}" id="edit_form" enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="form-body col-md-8 col-md-offset-2">
                <div class="left-bar">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">ID:
                            </h3>
                            <input id="cate-id" type="text" name="cate_id" class="form-control" value=""/>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Name
                            </h3>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad" style="">

                            <input id="name" type="text" name="name" class="form-control" value=""/>

                        </div>
                    </div>
                    <div class="box box-note">
                        <div class="box-header">
                            <h3 class="box-title">Note
                            </h3>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad" style="">

                            <input id="note" type="text" name="note" class="form-control" value=""/>

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
                var name = $('#name').val();
                var note = $('#note').val();
                $(".error").remove();
                if(name.length < 2){
                    $('#name').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
            })
        })
    </script>
@endsection