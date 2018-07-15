@extends('layout.master')
    <!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="alert"> <p style=color:red;">
                    {{Session('success')}}
                </p>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                            <div class="add_button"><input type="button" class="btn btn-block btn-info btn-flat" value="Submit"></div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-1">TITLE</th>
                                    <th class="col-md-2">SAMPLE</th>
                                    <th class="col-md-6">CONTENT</th>
                                    <th class="col-md-1">CATEGORY</th>
                                    <th class="col-md-1">EDIT</th>
                                    {{--<th>CSS grade</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $each_news)
                                <tr>
                                    <td>{{$each_news->news_id}}</td>
                                    <td>{{$each_news->title}}</td>
                                    <td>{{$each_news->sample}}</td>
                                    <td>{{$each_news->content}}</td>
                                    <td>
                                        @foreach(\Modules\TestModule\Entities\NewsCate::getCateName($each_news->news_id) as $categories)
                                        <label>{{$categories->name}}</label>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-app edit-custom"  href="{{route('edit',$each_news->news_id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    {{--<td>X</td>--}}
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>Edit</th>
                                </tr>
                                </tfoot>
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
