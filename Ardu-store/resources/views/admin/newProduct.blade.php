@extends('../layouts.app')

@section('content')

    <div class="container">

            <form action="{{ route('product.add') }}" method="get">

                <label for="name">Name</label>
                <input class = "form" type="text" id="name" name="Name" placeholder="Product name is..">
            
                <label for="price">Price</label>
                <input class = "form" type="text" id="price" name="Price" placeholder="Product price is..">
            
                <label for="imglink">Image Link</label>
                <input class = "form" type="text" id="imglink" name="Image" placeholder="Product image link is..">
            
                <label for="description">Description</label>
                <textarea id="Description" name="Description" placeholder="Write the product description.." style="height:200px"></textarea>
            
                <input class="form" type="submit" value="Submit">
            
            </form>

    </div>
@endsection
