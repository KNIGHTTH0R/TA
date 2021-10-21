<input type="{{ $type }}" name="{{ $name }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" autocomplete="off"
@if($type != 'password')value="{{ old($name) }}"@endif>
