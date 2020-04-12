@extends('layout.master')

@section('content')
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layout.navigation')
                <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>

        </div>        <div class="app-main">
                @include('layout.sidebar')
                @include('layout.success')
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
