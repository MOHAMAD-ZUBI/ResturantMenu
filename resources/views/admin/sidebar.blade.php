<!--SideBar start-->
<aside class="sidebar" id="sidebar">
    <div class="logo">
        <h2 class=""><i class="fa-solid fa-screwdriver-wrench" style="color: rgb(123, 124, 124);"></i>
            <span>Control <span style="color: rgb(123, 124, 124);">Panel</span></span></h2>
        <hr/>

    </div>
    <div class="items">
        <ul>
            <li>
                </button>
                <a href="{{route('admin.index')}}" class="active sidebar-links"
                ><i class="fa-solid fa-house-chimney"></i> <span>Dashboard</span></a
                >
                <a href="#" class="sidebar-links" id="collapse1"
                   data-bs-toggle="collapse"
                   data-bs-target="#category-collapse" aria-expanded="false"
                ><i class="fa-solid fa-bars-staggered"></i> <span>Categories</span><i class="fa-solid fa-sort-down"
                                                                                      id="arrowDown"></i></a
                >
                <div class="collapse" id="category-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{route('admin.category.index')}}" class="collapse-link text-decoration-none"><i
                                    class="fa-solid fa-rectangle-list"></i> <span>Category List</span></a></li>
                        <li><a href="{{route('admin.category.create')}}" class="collapse-link text-decoration-none"><i
                                    class="fa-solid fa-circle-plus"></i><span> Add Category</span></a></li>
                    </ul>
                </div>
                <a href="#" class="sidebar-links" id="collapse2" data-bs-toggle="collapse"
                   data-bs-target="#product-collapse" aria-expanded="false"
                ><i class="fa-solid fa-box"></i> <span>Products</span> <i class="fa-solid fa-sort-down"
                                                                          id="arrowDown"></i></a
                >
                <div class="collapse" id="product-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{route('admin.product.index')}}" class="collapse-link text-decoration-none"><i
                                    class="fa-solid fa-rectangle-list"></i> <span> Product List</span></a></li>
                        <li><a href="{{route('admin.product.create')}}" class="collapse-link text-decoration-none"><i
                                    class="fa-solid fa-plus"></i>
                                <span>Add product</span></a></li>
                    </ul>
                </div>
                <a href="#" class="sidebar-links" id="collapse2" data-bs-toggle="collapse"
                   data-bs-target="#user-collapse" aria-expanded="false"
                ><i class="fa-solid fa-user-gear"></i> <span>Users</span> <i class="fa-solid fa-sort-down"
                                                                             id="arrowDown"></i></a
                >
                <div class="collapse" id="user-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{route('admin.user.index')}}" class="collapse-link text-decoration-none"><i
                                    class="fa-solid fa-rectangle-list"></i> <span> User List</span></a></li>
                        <li><a href="#" class="collapse-link text-decoration-none"><i class="fa-solid fa-plus"></i>
                                <span>Add User</span></a></li>
                    </ul>
                </div>
                <a href="{{route('admin.setting')}}" class="sidebar-links"
                ><i class="fa-solid fa-gear"></i><span> Settings</span></a
                >
            </li>
        </ul>
    </div>
    </div>
</aside>


<!--SideBar end-->
