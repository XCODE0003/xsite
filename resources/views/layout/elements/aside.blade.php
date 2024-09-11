@section('aside')
    <div id="left" class="leftnavi"
         onclick="this.className=this.className=='leftnavi'? 'leftnavi open' : 'leftnavi';">
        <div class="sideblock">
            <div class="sideheader">Категории</div>
            <div class="menu">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="/category/{{$category['id']}}" title="{{$category['name']}}">{{$category['name']}}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection
