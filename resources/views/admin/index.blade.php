@include('admin.layouts.header')
@include('admin.layouts.navbar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
{{--            {{ trans('site.dashboard') }}--}}
{{--            <small>{{ trans('site.control_panel') }}</small>--}}

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('site.home') }}</a></li>
{{--            <li class="active">{{ trans('site.dashboard') }}</li>--}}
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('admin.layouts.errors')
        @include('admin.layouts.session')
        @yield('content')
    </section>

</div>

@include('admin.layouts.footer')
