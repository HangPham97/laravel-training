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
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                            <div class="add_button"><button type="button" class="btn btn-block btn-info btn-flat"><a href="{{('create/category')}}">Add</a></button></div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">NAME</th>
                                    <th class="col-md-5">NOTE</th>
                                    <th class="col-md-1">EDIT</th>
                                    <th class="col-md-1">DELETE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cate as $each_cate)
                                <tr class="td_padding">
                                    <td><?php echo $each_cate->cate_id?></td>
                                    <td><?php echo $each_cate->name?></td>
                                    <td><?php echo $each_cate->note?></td>

                                    <td>
                                        <a class="btn btn-app edit-custom"  href="{{route('cate.edit',$each_cate->cate_id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" id="del-button" class="btn btn-block btn-xs btn-danger btn-del"><a href="{{route('cate.delete',$each_cate->cate_id)}}"> delete</a> </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#del-button').click(function (e) {

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