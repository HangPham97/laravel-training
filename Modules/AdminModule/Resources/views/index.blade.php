@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="alert"> <p style="color:red;">
                    {{Session('success')}}
                </p>
            </div>
            <div class="row">

                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Contact list
                                <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add</a>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <table id="admin-table" class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="30">ID</th>
                                    <th class="col-md-1">Title</th>
                                    <th class="col-md-3">Sample</th>
                                    <th class="col-md-4">Content</th>
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
estmodule