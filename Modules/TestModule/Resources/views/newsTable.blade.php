@extends('layout.masterDashboard')
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
                                <div class="panel-heading col-md-12">
                                    <h4 class="box-title col-md-6">News Table</h4>
                                    <div class="add_button">
                                        <button type="button" class="btn btn-block btn-info btn-flat">
                                            <a href="{{ route('news.create') }}">Add</a>
                                        </button>
                                    </div>
                                </div>

                                <div class="panel-body row">
                                    <form method="POST" id="search-form" class="form-inline col-md-12" role="form">
                                        {{csrf_field()}}
                                            <div class="col-md-4 form-group title-form">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                   placeholder="search title">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label>Category</label>
                                            <input type="hidden" name="category" value="none">
                                            <select class="selectpicker" name="category" id="category">
                                                <option name="category" value="none">Tất cả các danh mục</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->cate_id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 button_submit">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>

                                    <table id="admin-table" class="table table-striped col-md-12"
                                           style="width: 100%    ">
                                        <thead>
                                        <tr>
                                            <th class="col-md-1">Image</th>
                                            <th class="col-md-1">Title</th>
                                            <th class="col-md-3">Sample</th>
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
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script')

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        var table = $('#admin-table').DataTable({
            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('table') }}",
                data: function (d) {
                    d.title = $('input[name=title]').val();
                    d.category = $('input[name=category]').val();
                }
            },
            columns: [
                {
                    name: 'image',
                    data: 'images',
                    "orderable": true,
                    "searchable": true,
                    "width": "10%"
                },
                // {data: 'images',name:'image'},
                {data: 'title', name: 'title', "width": "15%"},
                {
                    data: 'display_sample', name: 'sample', "width": "20%",
                    render: function (data) {
                        return data;
                    },
                },
                {
                    data: 'display_content', name: 'content', "width": "26%",
                    render: function (data) {
                        return data;
                    },
                },
                {data: 'category', name: 'category', "width": "10%"},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "18%"},
            ]
        });

        $('#search-form').on('submit', function (e) {
            $category = $(".selectpicker option:selected").val();
            $("input[name = 'category']").val($category);
            table.draw();
            e.preventDefault();
        });

        $('.del-button').click(function (e) {
            if (confirm("Are you sure you want to delete?")) {
                return true;
            }
            else {
                return false;
            }

        })

    </script>

@endsection