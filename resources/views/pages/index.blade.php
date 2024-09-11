@extends('layout.content.main')
@section('content')

    <div id="right">
        <table width="100%" cellspacing="0" padding="0" border="0">
            <tr>
                <td>

                    @foreach($videos->items() as $video)

                        <div class="short-story">
                            <a href="/video/{{$video->id}}"
                               title="Первая интимная близость подростков">
                                <img src="/storage/{{$video->preview}}" style="background:url(video/pervaya-intimnaya-blizost-podrostkov-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/pervaya-intimnaya-blizost-podrostkov-0.jpg', sizingMethod='scale');
-ms-filter: " progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/pervaya-intimnaya-blizost-podrostkov-0.jpg'
                                     , sizingMethod='scale' )";" />
                                <h2 class="short-title">{{$video->name}}</h2>
                            </a>
                            <div class="short-time">{{$video->timeline}}</div>
                            <div class="clear"></div>
                        </div>

                    @endforeach
                        <div class="navigation" align="center">
                            {{ $videos->links('vendor.pagination.custom') }}
                        </div>


                </td>
            </tr>
        </table>
    </div>


@endsection
