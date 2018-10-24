<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="fromId" content="{{Auth::check() ? Auth::user()->id : 'null'}}">

        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        @stack('after-styles')

        <link media="all" type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .parsley-required{
                font-size: small;
                color: #c64a48;
                margin-top:5px;
                font-style: italic;
            }
            input.parsley-success,
            select.parsley-success,
            textarea.parsley-success {
                color: #468847;
                background-color: #DFF0D8;
                border: 1px solid #D6E9C6;
            }

            input.parsley-error,
            select.parsley-error,
            textarea.parsley-error {
                color: #B94A48;
                background-color: #F2DEDE;
                border: 1px solid #EED3D7;
            }

            .parsley-errors-list {
                margin: 2px 0 3px;
                padding: 0;
                list-style-type: none;
                font-size: 0.9em;
                line-height: 0.9em;
                opacity: 0;

                transition: all .3s ease-in;
                -o-transition: all .3s ease-in;
                -moz-transition: all .3s ease-in;
                -webkit-transition: all .3s ease-in;
            }

            .parsley-errors-list.filled {
                opacity: 1;
            }
            .pull-right{
                float:right;
            }
            .pull-left{
                float:left;
            }
        </style>
        <style class="example">
            .form-section {
                display: none;
            }
            .form-section.current {
                display: inherit;
            }
            .btn-info, .btn-default {
                margin-top: 10px;
            }
        </style>
    </head>
    <body  style="background-color: #00a67c">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            @if($logged_in_user && $logged_in_user->upload_status == false)
                <div class="alert alert-danger">
                    <strong>Warning!</strong> Please <a href="/account">Click Here</a> Upload a Photo ID to Verify with in {{$logged_in_user->created_at->addDays(30)->format('d.m.Y')}}
                </div>

            @endif

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')


        <script src="{{ asset('js/parsly.js') }}"></script>
        <script class="example">
            $(function () {
                var $sections = $('.form-section');

                function navigateTo(index) {
                    // Mark the current section with the class 'current'
                    $sections
                        .removeClass('current')
                        .eq(index)
                        .addClass('current');
                    // Show only the navigation buttons that make sense for the current section:
                    $('.form-navigation .previous').toggle(index > 0);
                    var atTheEnd = index >= $sections.length - 1;
                    $('.form-navigation .next').toggle(!atTheEnd);
                    $('.form-navigation [type=submit]').toggle(atTheEnd);
                }

                function curIndex() {
                    // Return the current index by looking at which section has the class 'current'
                    return $sections.index($sections.filter('.current'));
                }

                // Previous button is easy, just go back
                $('.form-navigation .previous').click(function() {
                    navigateTo(curIndex() - 1);
                });

                // Next button goes forward iff current block validates
                $('.form-navigation .next').click(function() {
                    $('form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                    }).done(function() {
                        navigateTo(curIndex() + 1);
                    });
                });

                // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
                $sections.each(function(index, section) {
                    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
                });
                navigateTo(0); // Start at the beginning
            });
        </script>


    </body>
</html>
