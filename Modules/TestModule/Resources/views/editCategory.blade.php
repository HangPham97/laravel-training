@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <form   method="post" action="{{route('cate.update',$cate->cate_id)}}" id="edit_form" enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="cate-box col-md-6 col-md-offset-3">
                <div class="left-bar">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">ID:
                            </h3>
                            <span style="padding-left: 10px; font-weight: 800;font-size: 18px">{{ old( 'id', $cate->cate_id) }}</span>
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

                            <input id="name" type="text" name="name" class="form-control" value="{{ old( 'name', $cate->name) }}"/>

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

                            <input id="note" type="text" name="note" class="form-control" value="{{ old( 'note', $cate->note) }}"/>

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
                $(".error").remove();
                if(name.length < 2){
                    $('#name').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
            })
        })
    </script>
@endsection