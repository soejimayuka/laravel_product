<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('時間毎の処置一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">タイトル</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">注意事項</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($timetreatments as $timetreatment)
              @foreach ($timetreatment->times as $timetreatment2)
              @foreach ($timetreatment2->treatments as $timetreatment3)
              <tr>　
                <td class="px-4 py-3">{{ $timetreatment3-> id}}</td>
                <td class="px-4 py-3">{{ $timetreatment3-> title}}</td>
                </td>
              </tr>
              @endforeach
              @endforeach

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
