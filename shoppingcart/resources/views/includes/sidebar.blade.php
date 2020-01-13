<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Menu</h4>
        </div>
        <div class="card-body">
            <div class="list-group">
                <div class="dropdown">
                    <a class="btn dropdown-toggle  list-group-item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('home') }}">Eyeglasses</a>
                        <a class="dropdown-item" href="{{ route('home') }}">Necklace</a>
                        <a class="dropdown-item" href="{{ route('home') }}">Hats</a>
                    </div>
                </div>
                
                <a href="{{ route('products.create') }}" class="list-group-item list-group-item-action text-center">Add Product</a>
                <a href="{{ route('customers.index') }}" class="list-group-item list-group-item-action text-center">Customers</a>
                <a href="{{ route('administrators.index') }}" class="list-group-item list-group-item-action text-center">Administrators</a>
                
            </div>
        </div>
    </div>
</div>