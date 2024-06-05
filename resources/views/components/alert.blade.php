@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class='text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $class='text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400"';
            break;
        case 'success':
            $class='text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $class='text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
            break;
        case 'dark':
            $class='text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
            break;
        
        default:
            $class='text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
@endphp

<div class="flex items-center p-4 mb-4 text-sm rounded-lg {{ $class }}" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">{{ $title ?? 'Alerta Info' }}</span> {{ $slot }}
    </div>
  </div>