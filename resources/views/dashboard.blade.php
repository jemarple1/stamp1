<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Advertise') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <form action="/addtask" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Title</label>
                    <input required type="text" name="title" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="task-description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea type="text" name="email_snippet" id="task-description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    @csrf
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="content" class="block text-sm font-medium text-gray-700">Website Address</label>
                    <input type="text" name="content" id="content" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>

                  <div id="checkbox-checked" class="grid col-span-6 gap-6" style="">
                  <div class="col-span-6 sm:col-span-3">
                    <label for="template" class="block text-sm font-medium text-gray-700">Text Color</label>
                    <select id="template" name="template" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </select>
                  </div>
                  </div>
                  <div id="checkbox-unchecked" style="display:none!important;">
                  </div>
                </div>
              </div>
              <div class="border-t border-gray-200">
                <dl>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Add Task</button>
                    </div>
                </dl>
              </div>
            </div>
          </form>
    </div>

    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">


    <!-- This example requires Tailwind CSS v2.0+ -->


</div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>
