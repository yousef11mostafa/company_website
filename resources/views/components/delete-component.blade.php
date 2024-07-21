<form class=" d-inline" action="{{ route("superadmin.$name.destroy", $model) }}"  method="post" onsubmit="confirmSubmit(event)" enctype="multipart/form-data">
    @csrf
    @method("delete")
      <button  type="submit" class="btn btn-danger" >
        <i class="fe fe-delete fe-16"></i>
      </button>
</form>
