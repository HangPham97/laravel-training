@if(!empty($news->category))
    @foreach($news->category as $cate)
        <label>{{$cate->name}}</label >
    @endforeach
@endif