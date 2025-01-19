<!-- {{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }} -->
<x-main.main-template>
    <x-main.header acttab="index" />
    <x-main.m-about />
    <x-main.m-success />
    <x-main.m-services :ser=$ser />
    <x-main.m-chooseus />
    <x-main.m-trusted />
    <x-main.a-contact />
    <x-main.footer :ser=$ser />
</x-main.main-template>
