<form action="{{ $url }}} " method="POST" onsubmit="return confirm('Apakah Anda Ingin Menghapusnya?')">
  @csrf
  @method("delete")
  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
 