@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="alert"><p style="color:red;">
                    {{Session('success')}}
                </p>
            </div>
            <div class="row">

                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading col-md-12">
                            <h3 class="box-title col-md-6">Hover Data Table</h3>
                            <div class="add_button">
                                <button type="button" class="btn btn-block btn-info btn-flat"><a
                                            href="{{ route('news.create') }}">Add</a></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table id="admin-table" class="table table-striped">
                                <thead>
                                <tr>
                                    <th >ID</th>
                                    <th class="col-md-1" style="width: 300px !important;">Title</th>
                                    <th class="col-md-3" style="width: 66px !important;">Sample</th>
                                    <th class="col-md-4">Content</th>
                                    <th class="col-md-3">Category</th>
                                    <th class="col-md-3">Action</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.del-button').click(function (e) {

                var x = confirm("Are you sure you want to delete?");
                if (x) {
                    return true;
                }
                else {

                    e.preventDefault();
                    return false;
                }
            })
        })
    </script>
@endsection