@extends("layouts.dashboard")
@section("content")
<div class="row justify-content-between">
    <div class="col-auto">
        <h1>Tutti i posts</h1>
    </div>
    {{-- <div class="col-auto">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
            Crea nuovo post
        </a>
    </div> --}}
</div>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th >ID</th>
            <th >Name</th>
            <th >Registration data</th>
            <th class="col-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td scope='row'>{{$user->id}}</td>
                <td  scope='row'>{{$user->name}}</td>
                <td  scope='row'>{{$user->created_at->diffForHumans()}}</td>
                 <td class="d-flex justify-content-end align-items-center gap-3">
                    <div class="btn-group mx-2">
                        <a class="btn btn-primary" href="{{ route("admin.users.show", $user->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Open" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                                <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                            </svg>
                            {{-- Dettaglio --}}
                        </a>
                        {{-- <a class="btn btn-primary" href="{{ route("admin.posts.edit", $post->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Modify">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a> --}}
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
