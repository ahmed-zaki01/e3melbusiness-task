<div class="row justify-content-center align-items-center">
    @can('update onboarding_setting')

    <a href="{{route('dashboard.settings.onboarding.edit', $id )}}" class="btn btn-sm btn-info mr-2"><i
            class="fa fa-edit"></i> {{ __('dashboard.edit') }}</a>
    @endcan

    @can('delete onboarding_setting')
    <form action="{{route('dashboard.settings.onboarding.destroy', $id  )}}" method="post" class="mb-0">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i>
            {{ __('dashboard.delete') }}</button>
    </form>
    @endcan

</div>

@include('dashboard._datatableAction')
