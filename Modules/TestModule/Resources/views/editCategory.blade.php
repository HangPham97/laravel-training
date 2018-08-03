@extends('layout.masterDashboard')
<!-- Content Wrapper. Contains page content -->
@section('sidebar-wrapper')
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href={{route('home')}}>
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="table-list active">
                <a class="toggle-down">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Table List</p>
                </a>
                <ul class="table-menu">
                    <li class="news-table">
                        <a href="{{route('news.home')}}">News</a>
                    </li>
                    <li class="category-table">
                        <a href="{{route('cate.home')}}">Category</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="alert"><p style="color:red;">
                            {{Session('success')}}
                        </p>
                    </div>
                    <div class="">

                        <div class="">
                            <div class="panel panel-default">

                                <div class="panel-body row">

                                    <form method="post" action="{{route('cate.update',$cate->news_id)}}" id="edit_form"
                                          enctype="multipart/form-data" style="width: 100%">
                                        {{csrf_field()}}
                                        <div class="col-md-12">
                                            <div class="cate-box col-md-6 col-md-offset-3">
                                                <div class="box-boder">
                                                    <div class="box">
                                                        <div class="box-header box-id">
                                                            <h3 class="box-title">ID:
                                                                <span style="padding-left: 10px; font-weight: 800;font-size: 18px">DS</span>
                                                            </h3>

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

                                                            <input id="name" type="text" name="name" class="form-control" value="Đời Sống">

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

                                                            <input id="note" type="text" name="note" class="form-control" value="">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-input"><input type="submit"
                                                                         class="btn btn-block btn-info btn-flat"
                                                                         value="Submit"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
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