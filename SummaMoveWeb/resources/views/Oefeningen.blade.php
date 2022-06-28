@include('Navbar')
        <div class="w-full h-full p-4 m-8 overflow-y-auto flex justify-between">
          {{-- <div class="flex items-center justify-center p-40 border-4 border-dotted">
            
          </div> --}}
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            naam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            beschrijving
                        </th>
                        <th scope="col" class="px-6 py-3">
                            img
                        </th>
                        <th scope="col" class="px-6 py-3">
                            delete
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($oefeningen as $oefening)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$oefening['naam']}}
                        </td>
                        <td class="px-6 py-4">
                          {{$oefening['beschrijving']}}
                        </td>
                        <td class="px-6 py-4">
                          {{$oefening['img']}}
                        </td>
                        <td class="px-6 py-4 text-right">
                          <form action="/removeoefening/{{$oefening['id']}} " method="POST">
                            @csrf
                            @method('delete')
                          <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button></a>                            
                          </form>

                      </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>                      
                  @endforeach
                </tbody>
            </table>
        </div>
        <a href="/createoefeningen">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Create
        </button>          
        </a>
       
      </div>
</div>

@include('footer')