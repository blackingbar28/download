<!-- Begin sidebar-menu -->
<ul class="sidebar-menu">
    <li class="header">Menu</li>
    <li class="treeview {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <a href="#"><span>Category</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('admin/categories/create') ? 'active' : '' }}">
                <a href="{!! route('categories.create') !!}">Add New</a>
            </li>
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}">
                <a href="{!! route('categories.index') !!}">Category</a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ Request::is('admin/articles*') ? 'active' : '' }}">
        <a href="#"><span>Article</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('admin/articles/create') ? 'active' : '' }}">
                <a href="{!! route('articles.create') !!}">Add New</a>
            </li>
            <li class="{{ Request::is('admin/articles') ? 'active' : '' }}">
                <a href="{!! route('articles.index') !!}">Article</a>
            </li>
        </ul>
    </li>
</ul>
<!-- /.sidebar-menu -->
