<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight uppercase">
                {{-- {{ __('Dashboard') }} --}}
                I miei progetti
            </h2>
            <a href="{{ route('projects.create') }}
            ">
                <i class="fa-solid fa-circle-plus text-xl text-cyan-600"></i>
            </a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-between p-6">
                @foreach ($projects as $projectData)
                    <div class="card flex items-center gap-4 flex-col w-[250px] bg-zinc-800  text-white p-3 rounded-xl">
                        <img src="{{ $projectData['thumb'] }}" class="w-[200px]">
                        <div class="flex items-center gap-2">
                            <h2 class="text-xl font-semibold"> {{ $projectData['title'] }}</h2>
                            <img src="{{ Vite::asset('resources/img/vue.png') }}" class="w-[30px]">
                        </div>

                        <p class="text-sm text-center">
                            {{ $projectData['description'] }}
                        </p>

                        <div class="actions">
                            <a href=""> Edit </a>
                            <a href=""> Delete </a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
