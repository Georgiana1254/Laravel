<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form method="POST" action="/jobs">
    @csrf
  <div class="container">
    <div class = " justify-content-center align-items-center gx-5 col-span-full my-4"">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ml-32">
        <div class="sm:col-span-4">
          <label for="Title" class="block text-sm font-medium leading-6 text-gray-900 col-span-full my-4">Create a New Job</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="Title" id="Title" autocomplete="Title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Programmer">
            </div>
          </div>
        </div>
        
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ml-32">
        <div class="sm:col-span-4">
          <label for="Salary" class="block text-sm font-medium leading-6 text-gray-900 col-span-full my-4">Salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="Salary" id="Salary" autocomplete="Salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50.000 Per Year">
            </div>
          </div>
        </div>

        <div class="col-span-full my-4">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="7" cols="50" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
        </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>  
  <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>

</x-layout>
