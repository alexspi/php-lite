@extends('layouts.main')

@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <title>Page title | Site title</title>
        <!-- add some inline style or css file if any -->
{{--        <link rel="stylesheet" href="{{ asset('plugins/baguetteBox.js/dist/baguetteBox.min.css')}}">--}}
{{--        <link rel="stylesheet" href="{{ asset('plugins/lightGallery/css/lightgallery-bundle.css')}}">--}}


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" media="screen">
{{--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>--}}
{{--        <link rel="stylesheet" href="/fancybox/jquery.fancybox.css" type="text/css" media="screen" />--}}
{{--        <script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>--}}
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css">--}}


    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-users bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Галерея ')}}</h5>
                            <span>{{ 'Пользователь : '. $user->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>

                        </ol>

                    </nav>
                </div>
            </div>
        </div>

        <div class="row clearfix">
        <livewire:galery :user="$user"/>
        </div>
    </div>
    <!-- push external js if any -->
    @push('script')
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

        <script>
            $(document).on("click", '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>

    @endpush
@endsection'