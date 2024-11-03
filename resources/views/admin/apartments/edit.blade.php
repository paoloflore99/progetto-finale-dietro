@extends('layouts.public')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.apartments.update', $apartments->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf()
                    @method('put')

                    @foreach ($services as $service)
                        <div class="mb-3 form-check-inline">
                            <label class="form-check-label" for="flexCheckDefault">{{ $service->name }}</label>
                            <input class="form-check-input" name="services[]" type="checkbox" value="{{ $service->id }}"
                                id="flexCheckDefault" {{ $apartments->services?->contains($service) ? 'checked' : '' }}>
                            @error('services')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    @endforeach
                    @error('services')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="mb-3">
                        <label class="form-label">Name: </label>
                        <input type="text" class="form-control" value="{{ old('name', $apartments->name) }}"
                            name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Immagini esistenti:</label>
                        @foreach ($apartments->images as $image)
                            <div>
                                <img src="{{ $image->url }}" alt="{{ $image->name }}" style="max-width: 100px;">
                                <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Elimina questa
                                immagine
                            </div>
                        @endforeach
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label">Aggiungi nuove immagini:</label>
                        <img style="width: 310px" src=" {{ asset('/storage/' . $apartments->images) }}" alt="">
                        <input type="file" class="form-control" name="images" multiple>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ old('description', $apartments->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Indirizzo:</label>
                        <input class="form-control" value="{{ old('address', $apartments->address) }}" name="address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero camere:</label>
                        <input class="form-control" type="number" value="{{ old('room', $apartments->room) }}"
                            name="room">
                        @error('room')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero letti:</label>
                        <input class="form-control" type="number" value="{{ old('bed', $apartments->bed) }}"
                            name="bed">
                        @error('bed')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero bagni</label>
                        <input class="form-control" type="number" value="{{ old('bathroom', $apartments->bathroom) }}"
                            name="bathroom">
                        @error('bathroom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metratura: </label>
                        <input type="number" class="form-control" value="{{ old('mq', $apartments->mq) }}" name="mq">
                        @error('mq')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Latitudine:</label>
                        <input type="text" class="form-control" value="{{ old('latitude', $apartments->latitude) }}"
                            name="latitude">
                        @error('latitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Longitudine:</label>
                        <input type="text" class="form-control" value="{{ old('longitude', $apartments->longitude) }}"
                            name="longitude">
                        @error('longitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="hidden" name="visibility" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="visibility-input"
                                name="visibility" {{ $apartments->visibility ? 'checked' : '' }}>
                            <label class="form-check-label" for="visibility-input">
                                Visibile
                            </label>
                            @error('visibility')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="hidden" name="availability" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="availability-input"
                                name="availability" {{ $apartments->availability ? 'checked' : '' }}>
                            <label class="form-check-label" for="availability-input">
                                Disponibile
                            </label>
                            @error('availability')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-sm m-2 btn-primary">Salva</button>
                    <button class="btn btn-sm m-2 btn-danger"><a class="text-decoration-none text-white" href="{{ route('admin.apartments.index') }}">Annulla</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
