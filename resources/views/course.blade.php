@extends('welcome')
@section('content')
    <main>
        <div id="header-dropdown" class="modal__overlay">
            <ul class="modal__window" data-test-id="learn-menu">
                @foreach($areas as $area)
                    @php
                        $arr = [];
                        for($i = 0; $i < count($area->courses); $i++){
                            $arr[] = $i;
                        }
                    @endphp
                    <li class="modal__item">
                        <div class="_1b2zmqj" data-test-learn-menu-domain="math">
                            <ul>
                                <li data-navigable-index="0">
                                    <a tabindex="-1" class="_1rio1scd" href="{{route('courses.index')}}">
                                        <span class="_17zmj242">{{$area->area_name}}</span>
                                    </a>
                                </li>
                            </ul>
                                @foreach($arr as $item)
                                <ul class="_121xeo4">
                                    <li data-navigable-index="1">
                                        <a tabindex="-1" aria-label="Python" href="{{route('post.show', ['post' => $area->courses[$item]->id])}}" class="_knb39h5">
                                            <span class="_xy39ea8">
                                                {{$area->courses[$item]->course_name}}
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                @endforeach
            
                        </div>
                    </li>
                @endforeach
            </ul>
        </div><!--modal__overlay-->
    </main>
@endsection