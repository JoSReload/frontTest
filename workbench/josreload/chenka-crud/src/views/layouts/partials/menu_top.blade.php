<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ $app_settings['app_name'] }}</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @foreach($menu_items as $item)
                    <li><a href="{{ $item['link_to'] }}">{{ $item['name'] }}</a></li>
                @endforeach
            </ul>
<!--            <form class="navbar-form navbar-right">-->
<!--                <input type="text" class="form-control" placeholder="Search...">-->
<!--            </form>-->
        </div>
    </div>
</div>