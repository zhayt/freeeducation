@extends('welcome')
@section("style")
<link rel="stylesheet" href="css/student-entry.088b234232eb46986c8c.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleformaincontent.css">
@endsection
@section('content')
    <main>
            <section class="section--spesial">
                <div class="section__header section__header--special">
                    <div class="header__inner">
                        <a href="{{ route('courses.index')}}" class="section__suptitle">
                            <h2>Course</h2>
                        </a>
                        @foreach($names as $name)
                            <h1 class="section__title">
                                {{$name->course_name}}
                            </h1>
                        @endforeach
                    </div>
                </div>
            </section>
        @php
            $i = 1;
        @endphp
        @foreach($items as $item)
            <section>
                <div id="accordion" class="accordion">
                    <div class="accordion__item active">
                        <div class="accordion__header">
                            <h2 href="" class="accordion__suptitle">
                                Lessen {{$i}}
                            </h2>
                            <h1 class="accordion__title">
                                {{$item->lesson_name}}
                            </h1>
                        </div>
                        <div class="accordion__content">
                            <div class="video">
                                <video class="video__item" src="{{$item->url_lesson_video}}" controls>
                                    <track kind="subtitles" src="videos/130.mp4" srclang="en" label="English">
                                </video>
                            </div>
                            <div class="text">
                                <p>
                                    {{$item->lesson_text}}
                                </p>
                            </div>
                        </div>
                    </div><!--accordion__item-->
                </div>
            </section>
            @php
                $i++;
            @endphp
        @endforeach
    </main>
@endsection