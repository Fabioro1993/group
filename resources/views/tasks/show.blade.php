<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tarea - {{$tasks->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="table-responsive col-md-12">
                        <table class="table text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Autor</th>
                                <th>Descripcion</th>
                                <th>Responsable</th>
                                <th>Fecha maxima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start"> {{$tasks->id}}</th>
                                <th scope="row" class="text-start"> {{$tasks->author->name}} </th>
                                <th scope="row" class="text-start"> {{$tasks->description}} </th>
                                <th scope="row" class="text-start"> {{$tasks->user->name}} </th>
                                <th scope="row" class="text-start"><?PHP echo date('d-m-Y',strtotime($tasks->date_max));?></th>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h4 class="mb-3">Notas</h4>
                    <div class="table-responsive col-md-12">
                        <table class="table text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Comentario</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks->logs as $item)

                                <tr>
                                    <th scope="row"> {{$item->id}}</th>
                                    <th scope="row"> {{$item->commentary}} </th>
                                    <th scope="row"><?PHP echo date('d-m-Y',strtotime($item->date));?></th>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-12">
                            <h4 class="mb-3">Nueva notas</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="needs-validation" novalidate action="{{ url('logs') }}" method="post">
                                {{ csrf_field() }}
                                <input type="text" class="form-control" id="tasks_id" name="tasks_id" value="{{$tasks->id}}" hidden>
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label for="date" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="" value="{{$min_date}}" min="{{$min_date}}" required>
                                        <div class="invalid-feedback">
                                            Valid date is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="commentary">Comentario</label>
                                            <textarea class="form-control" id="commentary" name="commentary" rows="3">{{old('commentary')}}</textarea>
                                          </div>
                                          <div class="invalid-feedback">
                                            Valid commentary is required.
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
