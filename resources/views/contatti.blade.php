<x-main>
    
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
<!-- snippet per gli errori di validazione -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- post del form -->
            <form action="{{route('send')}}" method="POST">
                @method('POST')
                @csrf<!-- token per la protezione dei dati -->

        <div class="container py-4">

        <!-- name -->
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input class="form-control" id="name" name="name" type="text" placeholder="{{old('name')}}" placeholder="Inserisci il tuo nome"/>
      </div>
  
      <!--phone number  -->
      <div class="mb-3">
        <label for="phone" class="form-label">Telefono</label>
        <input class="form-control" id="phone" name="phone" type="text" value="{{old('phone')}}" placeholder="(123) 456-7890"/>
      </div>
    <!--  email-->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" id="email" name="email" type="email" value="{{old('email')}}" placeholder="name@example.com" />
      </div>
      <!--message -->
      <div class="mb-3">
        <label for="message" class="form-label" >Messaggio</label>
        <textarea class="form-control" id="message" name="message" type="text" placeholder="Inserisci il tuo messaggio" style="height: 10rem;"></textarea>
      </div>
  
      <!--button -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
      </div>
  
    </form>
  
  </div>

</x-main>