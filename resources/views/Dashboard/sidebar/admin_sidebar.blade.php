<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Admin Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                              Admin Dashboard
                            </li>
                            <li class="nav-item ">
                    <!-- Users  -->
                                <a class="nav-link active" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                <i class="fa fa-fw fa-user-circle"></i>Users <span class="badge badge-success">6</span></a>

                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('user_list')}}">User List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_role')}}">Add User Role</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('role_list')}}">Role List</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <!-- Medicine  -->

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                                <i class="fas fa-capsules"></i>Medicine</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">

                                            <a class="nav-link" href="{{route('medicine_list')}}"> Medicine list</a>

                                        </li>
                                        <li class="nav-item">

                                            <a class="nav-link" href="{{route('add_medicine')}}">Add Medicine</a>
                                        </li>

                                                                  </ul>
                                </div>
                            </li>

                            <!-- Medicine Category  -->

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                                <i class="fas fa-capsules"></i>Medicine Category </a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('medicine_category')}}">Category List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_category')}}">Add Category</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <!-- Purchase  -->


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-4" aria-controls="submenu-4">
                                <i class="fab fa-fw fa-wpforms"></i>Purchase </a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('add_purchase')}}">Add Purchase</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('manage_purchase')}}"> Manage Purchase</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Suppliers -->

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-5" aria-controls="submenu-5">
                                <i class="fab fa-fw fa-wpforms"></i>Suppliers </a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('add_supplier')}}">Add Supplier</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('supplier_list')}}"> Supplier List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Reports -->
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-6" aria-controls="submenu-6">
                                <i class="fab fa-fw fa-wpforms"></i>Reports </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-elements.html">Sales Report</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/form-validation.html">Purchase Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>





                          </ul>
                      </div>
                  </nav>
              </div>
              </div>            </div>
                            </li>
                                    </ul>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
