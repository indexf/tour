<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Меню</li>
            <!-- Optionally, you can add icons to the links -->

            <li><a href="{{ url('/home') }}"><i class='fa fa-user-plus'></i> <span>Заявки</span></a></li>
            <li><a href="{{ route('main') }}"><i class='fa fa-flag'></i> <span>Основная</span></a></li>
            <li><a href="{{ route('atour') }}"><i class='fa fa-edit'></i> <span>Туры</span></a></li>
            <li><a href="{{ route('photo') }}"><i class='fa fa-file-image-o'></i> <span>Галерея</span></a></li>
            <li><a href="{{ route('guide') }}"><i class='fa fa-group'></i> <span>Гиды</span></a></li>
            <li><a href="{{ route('review') }}"><i class='fa fa-thumbs-up'></i> <span>Отзывы</span></a></li>
            <li><a href="{{ route('instagram') }}"><i class='fa fa-instagram'></i> <span>instagram</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
