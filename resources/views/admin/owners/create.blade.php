<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          オーナー登録
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative" _msthidden="8">
                  <div class="container px-5 mx-auto" _msthidden="8">
                    <div class="flex flex-col text-center w-full mb-12" _msthidden="2">
                      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" _msthash="572613" _msttexthash="132405" _msthidden="1">オーナー登録</h1>
                    </div>
                    <div class="lg:w-1/2 md:w-2/3 mx-auto" _msthidden="6">
                      <x-auth-validation-errors class="mb-4" :errors="$errors" />
                      <form method="post" action="{{ route('admin.owners.store') }}">
                        @csrf
                      <div class="-m-2" _msthidden="6">
                        <div class="p-2 w-1/2 mx-auto" _msthidden="1">
                          <div class="relative" _msthidden="1">
                            <label for="name" class="leading-7 text-sm text-gray-600" _msthash="1152983" _msttexthash="43069" _msthidden="1">オーナー名</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"  required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        <div class="p-2 w-1/2 mx-auto" _msthidden="1">
                          <div class="relative" _msthidden="1">
                            <label for="email" class="leading-7 text-sm text-gray-600" _msthash="1152984" _msttexthash="58058" _msthidden="1">メールアドレス</label>
                            <input type="email" id="email" name="email"  value="{{ old('email') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        <div class="p-2 w-1/2 mx-auto" _msthidden="1">
                          <div class="relative" _msthidden="1">
                            <label for="password" class="leading-7 text-sm text-gray-600" _msthash="1152984" _msttexthash="58058" _msthidden="1">パスワード</label>
                            <input type="password" id="password" name="password" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        <div class="p-2 w-1/2 mx-auto" _msthidden="1">
                          <div class="relative" _msthidden="1">
                            <label for="password_confirmation" class="leading-7 text-sm text-gray-600" _msthash="1152984" _msttexthash="58058" _msthidden="1">パスワード確認</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          </div>
                        </div>
                        <div class="p-2 w-full flex justify-around mt-4" _msthidden="1">
                          <button type="button" onclick="location.href='{{ route('admin.owners.index') }}'" class=" bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">戻る</button>
                          <button  type="submit" class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">登録する</button>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </section>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>