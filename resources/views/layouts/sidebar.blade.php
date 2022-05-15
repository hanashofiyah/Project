<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        

        <li class="menu-sidebar"><a href="{{ url('/beranda') }}"><span class="fa fa-calendar-minus-o"></span> Beranda Dashboard</span></a></li>

        @if(\Auth::user()->role == 1)

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('siswa') }}"><i class="fa fa-circle-o"></i> Data Siswa</a></li>

            <li><a href="{{ url('guru') }}"><i class="fa fa-circle-o"></i> Data Guru</a></li>

            <li><a href="{{ url('kelas') }}"><i class="fa fa-circle-o"></i> Data Kelas</a></li>


            <li><a href="{{ url('mapel') }}"><i class="fa fa-circle-o"></i> Data Mapel</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Jadwal Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('set/jadwal-pelajaran') }}"><i class="fa fa-circle-o"></i> Set Jadwal Pelajaran</a></li>

            <li><a href="{{ url('jadwal-pelajaran') }}"><i class="fa fa-circle-o"></i> List Jadwal Pelajaran</a></li>

            <li><a href="{{ url('action/jadwal-pelajaran') }}"><i class="fa fa-circle-o"></i> Action Jadwal Pelajaran</a></li>
          </ul>
        </li>

        @endif

        @if((\Auth::user()->role == 2) || (\Auth::user()->role == 3))

        <li class="menu-sidebar"><a href="{{ url('/jadwal-pelajaran-ku') }}"><span class="glyphicon glyphicon-log-out"></span> Jadwal Pelajaran Ku</span></a></li>

        @endif

        <li class="menu-sidebar"><a href="{{ url('/update-profile') }}"><span class="glyphicon glyphicon-log-out"></span> Update Profile</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>