@extends("layouts/layout")
@section("page-content")
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Inventory</h1>

    <!-- Tables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/new" class="btn btn-primary btn-icon-split btn-sm">
                <span class="text">Add Item</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->iname}}</td>
                            <td>${{$item->price}}</td>
                            <td>
                                <form method="post" action="/delete/{{$item->id}}">
                                @csrf
                                @method("DELETE")
                                <a href="/edit/{{$item->id}}" class="btn btn-info btn-icon-split btn-sm">
                                    <span class="text">Edit</span>
                                </a>
                                <button onclick="return confirm('Delete Skin?')" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection