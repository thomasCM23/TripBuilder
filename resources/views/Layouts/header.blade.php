<header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Trip Builder</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="waterfall-exp">
        </div>
      </div>
    </div>
    <!-- Bottom row, not visible on scroll -->
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/airports">Airports</a>
        <a class="mdl-navigation__link" href="/">Home</a>
        @if(!Auth::check())
        <a class="mdl-navigation__link" href="/login">Login</a>
        <a class="mdl-navigation__link" href="/register">Register</a>
        @endif
        @if(Auth::check())
        <a class="mdl-navigation__link" href="/trip">Trips</a>
        <a class="mdl-navigation__link" href="/logout">Logout</a>
        @endif
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Trip Builder</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="/airports">Airports</a>
      <a class="mdl-navigation__link" href="/">Home</a>
      @if(!Auth::check())
        <a class="mdl-navigation__link" href="/login">Login</a>
        <a class="mdl-navigation__link" href="/register">Register</a>
        @endif
      @if(Auth::check())
        <a class="mdl-navigation__link" href="/trip">Trips</a>
        <a class="mdl-navigation__link" href="/logout">Logout</a>
        @endif
    </nav>
  </div>