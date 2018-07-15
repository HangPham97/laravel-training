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
                            <div class="add_button"><button type="button" class="btn btn-block btn-info btn-flat"><a href="{{ route('news.create') }}">Add</a></button></div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr class="td_padding">
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-2">TITLE</th>
                                    <th class="col-md-2">SAMPLE</th>
                                    <th class="col-md-4">CONTENT</th>
                                    <th class="col-md-1">CATEGORY</th>
                                    <th class="col-md-1">EDIT</th>
                                    <th class="col-md-1">DELETE</th>
                                    {{--<th>CSS grade</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $each_news)
                                    <tr>
                                        <td><?php echo $each_news->news_id?></td>
                                        <td><?php echo $each_news->title?></td>
                                        <td><?php echo $each_news->sample?></td>
                                        <td><?php echo $each_news->content?></td>
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
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger btn-del"><a href="{{route('delete',$each_news->news_id)}}"> delete</a> </button>
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
@endsection
