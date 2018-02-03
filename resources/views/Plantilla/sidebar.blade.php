<aside id="left-panel">
    {{-- <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is -->
          Fundacion PROFIN
				</span>
    </div> --}}
    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->

            <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <span>
                   Cerrar Sesion
               </span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                {{ csrf_field() }}
            </form>


        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="{{ url('/panel') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bank"></i> <span class="menu-item-parent">Vallegrande 2017</span></a>
                <ul>
                    <li>
                        <a href="{{ url('/transporte/2017') }}">
                          <i class="fa fa-lg fa-fw fa-automobile"></i>
                          Transporte
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/impuesto/2017') }}">
                          <i class="fa fa-lg fa-fw fa-dollar"></i>
                          Impuestos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sobrepeso/2017') }}">
                          <i class="fa fa-lg fa-fw fa-arrow-circle-up"></i>
                          Sobrepeso
                        </a>
                    </li>
                    <li >
                        <a href="#">
                          <i class="fa fa-lg fa-fw fa-building"></i>
                          <span class="menu-item-parent">Hotel</span>
                        </a>
                        <ul>
                            <li class="open">
                                <a href="{{ url('/hotel/2017/1') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 1</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2017/2') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 2</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2017/3') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 3</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2017/4') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/varios/2017') }}">
                          <i class="fa fa-lg fa-fw fa-life-ring"></i>
                          Varios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/total/2017') }}">
                          <i class="fa fa-lg fa-fw fa-paragraph"></i>
                          Total
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-fax"></i> <span class="menu-item-parent">Entre Rios 2018</span></a>
                <ul>
                    <li>
                        <a href="{{ url('/transporte/2018') }}">
                          <i class="fa fa-lg fa-fw fa-automobile"></i>
                          Transporte
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/impuesto/2018') }}">
                          <i class="fa fa-lg fa-fw fa-dollar"></i>
                          Impuestos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sobrepeso/2018') }}">
                          <i class="fa fa-lg fa-fw fa-arrow-circle-up"></i>
                          Sobrepeso
                        </a>
                    </li>
                    <li >
                        <a href="#">
                          <i class="fa fa-lg fa-fw fa-building"></i>
                          <span class="menu-item-parent">Hotel</span>
                        </a>
                        <ul>
                            <li class="open">
                                <a href="{{ url('/hotel/2018/1') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 1</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2018/2') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 2</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2018/3') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 3</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2018/4') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/varios/2018') }}">
                          <i class="fa fa-lg fa-fw fa-life-ring"></i>
                          Varios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/total/2018') }}">
                          <i class="fa fa-lg fa-fw fa-paragraph"></i>
                          Total
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-jsfiddle"></i> <span class="menu-item-parent">2019</span></a>
                <ul>
                    <li>
                        <a href="{{ url('/transporte/2019') }}">
                          <i class="fa fa-lg fa-fw fa-automobile"></i>
                          Transporte
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/impuesto/2019') }}">
                          <i class="fa fa-lg fa-fw fa-dollar"></i>
                          Impuestos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sobrepeso/2019') }}">
                          <i class="fa fa-lg fa-fw fa-arrow-circle-up"></i>
                          Sobrepeso
                        </a>
                    </li>
                    <li >
                        <a href="#">
                          <i class="fa fa-lg fa-fw fa-building"></i>
                          <span class="menu-item-parent">Hotel</span>
                        </a>
                        <ul>
                            <li class="open">
                                <a href="{{ url('/hotel/2019/1') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 1</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2019/2') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 2</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2019/3') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 3</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2019/4') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/varios/2019') }}">
                          <i class="fa fa-lg fa-fw fa-life-ring"></i>
                          Varios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/total/2019') }}">
                          <i class="fa fa-lg fa-fw fa-paragraph"></i>
                          Total
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-recycle"></i> <span class="menu-item-parent">2020</span></a>
                <ul>
                    <li>
                        <a href="{{ url('/transporte/2020') }}">
                          <i class="fa fa-lg fa-fw fa-automobile"></i>
                          Transporte
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/impuesto/2020') }}">
                          <i class="fa fa-lg fa-fw fa-dollar"></i>
                          Impuestos
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sobrepeso/2020') }}">
                          <i class="fa fa-lg fa-fw fa-arrow-circle-up"></i>
                          Sobrepeso
                        </a>
                    </li>
                    <li >
                        <a href="#">
                          <i class="fa fa-lg fa-fw fa-building"></i>
                          <span class="menu-item-parent">Hotel</span>
                        </a>
                        <ul>
                            <li class="open">
                                <a href="{{ url('/hotel/2020/1') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 1</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2020/2') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 2</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2020/3') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 3</span>
                                </a>
                            </li>
                            <li class="open">
                                <a href="{{ url('/hotel/2020/4') }}">
                                  <i class="fa fa-lg fa-fw fa-building"></i>
                                  <span class="menu-item-parent">Hotel 4</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/varios/2020') }}">
                          <i class="fa fa-lg fa-fw fa-life-ring"></i>
                          Varios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/total/2020') }}">
                          <i class="fa fa-lg fa-fw fa-paragraph"></i>
                          Total
                        </a>
                    </li>

                </ul>
            </li>


        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
                    <i class="fa fa-arrow-circle-left hit"></i>
                </span>

</aside>
<!-- END NAVIGATION -->
