<form action="{{ $href }}"
      method="post"
      class="d-inline-block delete_service_{{ $id }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $id }})">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>