<!--<a onclick="editData({{$news->news_id }})" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> -->


<a href="{{route('edit',$news->news_id )}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>
<a href="{{route('delete',$news->news_id )}}" id="del-button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>