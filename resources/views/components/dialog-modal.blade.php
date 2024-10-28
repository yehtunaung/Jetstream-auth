@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-white dark:bg-black">
        <div class="text-lg font-medium text-black dark:text-white">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-black dark:text-white">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-black text-end">
        {{ $footer }}
    </div>
</x-modal>
