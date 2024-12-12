<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-stack-800 dark:bg-stack-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-stack-800 uppercase tracking-widest hover:bg-stack-700 dark:hover:bg-white focus:bg-stack-700 dark:focus:bg-white active:bg-stack-900 dark:active:bg-stack-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-stack-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
