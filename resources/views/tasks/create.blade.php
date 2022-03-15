<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nueva tarea
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-12">
                            <h4 class="mb-3">Crear nueva tarea</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="needs-validation" novalidate action="{{ url('tasks') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label for="author_id" class="form-label">Autor</label>
                                        <input type="text" class="form-control" id="author_id" placeholder="" value="{{ Auth::user()->name}}" disabled>
                                        <div class="invalid-feedback">
                                            Valid author_id is required.
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="user_id" class="form-label">Responsable</label>
                                        <select class="form-select" id="user_id" name="user_id" required>
                                            <option >Responsable</option>
                                            @foreach ($responsable as $resp )
                                                <option value="{{$resp->id}}">{{$resp->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="date_max" class="form-label">Fecha de entrega</label>
                                        <input type="date" class="form-control" id="date_max" name="date_max" placeholder="" value="{{old('date_max')}}" min="{{$min_date}}" required>
                                        <div class="invalid-feedback">
                                            Valid date_max is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Descripcion</label>
                                            <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                                          </div>
                                          <div class="invalid-feedback">
                                            Valid description is required.
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <button class="btn btn-primary btn-sx" type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
