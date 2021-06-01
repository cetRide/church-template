<nav class = "navbar navbar-inverse navbar-fixed-top white-text">
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#navbar" aria-expanded = "false" aria-controls = "navbar">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>

            @if (Auth::user())
                <button type = "button" class = "navbar-toggle collapsed sidebar-toggle" data-toggle = "collapse" data-target = "#sideBar" aria-expanded = "false" aria-controls = "navbar">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            @endif

            <a class = "navbar-brand" href = "/dashboard">The Alma Website</a>
        </div>

        <div id = "navbar" class = "navbar-collapse collapse current-user">
            <ul class = "nav navbar-nav navbar-right white-text">
                @if (Auth::user())

                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle current-user-link" data-toggle = "dropdown" role = "button" aria-haspopup = "true"
                           aria-expanded = "false">
                            <div class = "circle white">
                                <i class = "fa fa-user"></i>
                            </div>
                            {{ Auth::user()->firstname.' '.Auth::user()->lastname. ' '}}<span class = "caret"></span>
                        </a>
                        <ul class = "dropdown-menu">
                            <li role = "separator" class = "divider"></li>
                            <li><a href = "/dashboard/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class = "nav navbar-nav navbar-right">
                <li><a href = "/">View Live Site</a></li>
            </ul>

        </div>
    </div>
</nav>
