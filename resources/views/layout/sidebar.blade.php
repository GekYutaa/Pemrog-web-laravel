<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
    <ul class="nav nav-pills flex-column mb-auto">
        @include('layout.nav-item', [
            'url' => '/',
            'name' => 'Home',
            'activePath' => '/',
        ])
        @include('layout.nav-item', [
            'url' => '/students',
            'name' => 'Students',
            'activePath' => 'students*',
        ])
        @include('layout.nav-item', [
            'url' => '/teachers',
            'name' => 'Teachers',
            'activePath' => 'teachers*',
        ])
    </ul>
</div>
