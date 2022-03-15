<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tareas
        </h2>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <a href="/tasks/create" class="btn btn-primary btn-sx">Nueva tarera</a>
        </div>
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
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $item)
                            <tr>
                                <th scope="row" class="text-start">{{$item->id}}</th>
                                <th scope="row" class="text-start"> {{$item->author->name}} </th>
                                <th scope="row" class="text-start"> {{$item->description}} </th>
                                <th scope="row" class="text-start"> {{$item->user->name}} </th>
                                <th scope="row" class="text-start" style="color: {{$item->color}}"><?PHP echo date('d-m-Y',strtotime($item->date_max));?></th>
                                <th scope="row" class="text-start">
                                    @if (Auth::id() ==  $item->user_id )
                                        <a class="btn btn-primary btn-sx" href="../tasks/{{$item->id}}">Ver</a>
                                    @else
                                        <a class="btn btn-primary btn-sx isDisabled" href="#">Ver</a>
                                    @endif
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
