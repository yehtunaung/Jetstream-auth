<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            Tasks List
        </h2>
    </x-slot>

    <div>
        <section class="mt-10">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-black shadow-md sm:rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <livewire:user-table>                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</x-app-layout>
