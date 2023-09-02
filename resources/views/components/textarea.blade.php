@props(['disabled' => false, 'field' => '','value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    {{ $value }}
</textarea>

@error($field)
    <div class="mt-2 p-2 bg-red-300 text-red-600 text-sm rounded-lg">{{ $message }}</div>
@enderror