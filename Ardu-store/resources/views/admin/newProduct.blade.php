@extends('../layouts.app')

@section('content')
    <div class="container">

        <div class="justify-content-center" style="width: 80%;margin: auto">
            <h1 style="color:rgb(193, 14, 14);font-size:30px;text-align: center">New Product</h1>

            <form action="{{ route('product.add') }}" method="get">

                <div>
                    <label for="name">Name</label>
                    <input class="form" type="text" id="name" name="Name" placeholder="Product name is..">
                </div>

                <div>
                    <label for="price">Price</label>
                    <input class="form" type="text" id="price" name="Price" placeholder="Product price is..">
                </div>

                <div>
                    <label for="imglink">Image Link</label>
                    <input class="form" type="text" id="imglink" name="Image" placeholder="Product image link is..">
                </div>

                <div>
                    <label for="description">Description</label>
                    <textarea id="Description" name="Description" placeholder="Write the product description.."
                              style="height:200px"></textarea>
                </div>

                <input class="form" type="submit" value="Submit">

            </form>

        </div>

    </div>

@endsection
