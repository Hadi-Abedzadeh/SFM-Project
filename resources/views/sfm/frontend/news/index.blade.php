@extends(env('THEME_NAME').'.layouts.frontend')
@section('content')

    <div class="newsproductarea">
        @foreach($news as $report)
            <div class="newsproduct">
                <div class="newsproductthumb"><img src="{{$report->imageUrl}}" draggable="false"></div>
                <div class="newsproductcontent">
                    <h4>{{$report->title}}</h4>
                    <p>{{$report->body}}</p>
                    <a href="{{route('frontend.news.index.show',['slug'=>$report->slug])}}" class="newsproductmore">VIEW MORE</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
