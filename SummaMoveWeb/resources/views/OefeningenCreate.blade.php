@include('Navbar')

          {{-- <div class="flex items-center justify-center p-40 border-4 border-dotted">
            
          </div> --}}
          {{-- <form action="createoefening" method="POST" autocomplete="off">
            @csrf
            @method('POST')
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="naam" id="naam" placeholder="voer een naam in" class="form-control text-center" />
                <label class="form-label" for="naam">naam</label>
              </div>
            <div class="form-outline mb-4">
              <input type="text" name="beschrijving" id="beschrijving"  placeholder="Voer je beschrijving in" class="form-control text-center" />
              <label class="form-label" for="beschrijving">beschrijving</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="text" name="img" class="form-control text-center" id="img" placeholder="voer een img in" />
              <label class="form-label" for="img">img</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">create Oefening</button>
          </form>
        </div> --}}
        <div class="w-full items-center text-center">
          <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-center" action="createoefening" method="POST" autocomplete="off" >
            @csrf
            @method('POST')
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="naam">
                naam
              </label>
              <input  class=" text-center shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="naam" name="naam" type="text" placeholder="Username">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="beschrijving">
                beschrijving
              </label>
              <input rows="5"   class=" text-center shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="beschrijving" name="beschrijving" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="img">
                img
              </label>
              <input rows="5"   class=" text-center shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="img" name="img" type="text" placeholder="Username">
            </div>
            <button type="submit" class="btn btn-primary btn-block bg-blue-600 text-white rounded-xl font-bold px-4 py-4">create Oefening</button>
          </form>
        </div>
       


@include('footer')