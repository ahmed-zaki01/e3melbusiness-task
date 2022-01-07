<div class="row justify-content-center align-items-center">

    <a href="{{route('dashboard.categories.edit', $id )}}" class="btn btn-sm btn-info mr-2"><i class="fa fa-edit"></i> Edit</a>

    <form action="{{ route('dashboard.categories.destroy', $id) }}" method="post" class="mb-0">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i>
            Delete</button>
    </form>

</div>

@include('dashboard._datatableAction')
