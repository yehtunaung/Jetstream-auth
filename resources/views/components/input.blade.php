@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-white text-black dark:bg-black dark:text-white focus:border-indigo-500  focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
