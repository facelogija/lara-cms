    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img style="width: 100px; margin-left: 15%;" src="/photo/admin/cms-logo.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="{{ route('admin.show') }}" class="{{ (request()->route()->getName() == 'admin.show') ? 'active' : '' }} list-group-item waves-effect">
          <i class="fa fa-pie-chart mr-3"></i>Valdymo panelė</a>
        <a href="{{ route('admin.profile') }}" class="{{ (request()->segment(2) == 'profile') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa fa-user mr-3"></i>Profilis</a>
        <a href="{{ route('admin.conmanager') }}" class="{{ (request()->segment(2) == 'conmanager') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa fa-table mr-3"></i>Turinio valdymas</a>
        <a href="{{ route('admin.statistics') }}" class="{{ (request()->segment(2) == 'statistics') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-bar mr-3"></i>Statistika</a>
        <a href="{{ route('budget') }}" class="{{ (request()->segment(2) == 'budget') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fas fa-dollar-sign mr-3"></i>Biudžetas</a>
        <a href="{{ route('admin.settings') }}" class="{{ (request()->segment(2) == 'settings') ? 'active' : '' }} list-group-item list-group-item-action waves-effect">
          <i class="fa fa-money mr-3"></i>Nustatymai</a>
          
      </div>

    </div>
    <!-- Sidebar -->
