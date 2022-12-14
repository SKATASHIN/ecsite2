<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          オーナー一覧
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="md:p-6 bg-white border-b border-gray-200">
              
                <section class="text-gray-600 body-font" _msthidden="24">
                  <div class="container md:px-5 mx-auto" _msthidden="24">
                    <x-flash-message status="session('status')" />
                    <div class="flex justify-end mb-4">
                      <button onclick="location.href='{{ route('admin.owners.create') }}'" class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">新規登録する</button>
                    </div>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto" _msthidden="20">
                      <table class="table-auto w-full text-left whitespace-no-wrap" _msthidden="20">
                        <thead _msthidden="4">
                          <tr _msthidden="4">
                            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl" _msthash="1608139" _msttexthash="44161" _msthidden="1">名前</th>
                            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608140" _msttexthash="58448" _msthidden="1">メールアドレス</th>
                            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608141" _msttexthash="94432" _msthidden="1">作成日</th>
                            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                            <th class="md:px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                          </tr>
                        </thead>
                        <tbody _msthidden="16">
                          @foreach ($owners as $owner)
                          <tr _msthidden="4">
                            <td class="md:px-4 py-3" _msthash="1615302" _msttexthash="62374" _msthidden="1">{{ $owner->name }}</td>
                            <td class="md:px-4 py-3" _msthash="1615303" _msttexthash="46852" _msthidden="1">{{ $owner->email }}</td>
                            <td class="md:px-4 py-3" _msthash="1615304" _msttexthash="26858" _msthidden="1">{{ $owner->created_at->diffForHumans() }}</td>
                            <td class="md:px-4 py-3">
                              <button  onclick="location.href='{{ route('admin.owners.edit', ['owner' => $owner->id ]) }}'" class=" text-white bg-indigo-400 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-500 rounded " _msthash="1322126" _msttexthash="79859" _msthidden="1">編集</button>
                            </td>
                            <form id="delete_{{$owner->id}}" method="post" action="{{ route('admin.owners.destroy', ['owner' => $owner->id ] )}}">
                              @csrf
                              @method('delete')
                              <td class="md:px-4 py-3">
                                <a href="#" data-id="{{ $owner->id }}" onclick="deletePost(this)" class=" text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded " _msthash="1322126" _msttexthash="79859" _msthidden="1">削除</a>
                              </td>
                          </form>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $owners->links() }}
                    </div>
                  </div>
                </section>

                {{--   エロクアント
                  @foreach ($e_all as $e_owner)
                    {{ $e_owner->name }}
                    {{ $e_owner->created_at->diffForHumans() }}
                  @endforeach
                  <br>
                  クエリビルダ
                  @foreach ($q_get as $q_owner)
                    {{ $q_owner->name }}
                    {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}
                  @endforeach  --}}
              </div>
          </div>
      </div>
  </div>
  <script>
  function deletePost(e) {
      'use strict';
      if (confirm('本当に削除してもいいですか?')) {
      document.getElementById('delete_' + e.dataset.id).submit();
      }
  }
  </script>
</x-app-layout>
