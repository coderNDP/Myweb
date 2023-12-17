<style>
    .main {
        background-image: linear-gradient(to right, #434343 0%, black 100%);
        width: 100%;
        height: 850px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<link rel="stylesheet" href="/css/add_new.css">

<div class="main">
    <div class="login-box">
        <p>Update shoes</p>
        <form action="{{ route('product.update', $product->id_product) }}" method='post' enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="user-box">
                <input required="" name="name" type="text" class="name" value="{{$product->name}}">

                <label>Name shoe</label>
            </div>


            <div class="user-box">
                <div class="wave-group">
                    <select class="input_2" name='id_brand'>
                        <option value="{{ $pro->id_brand }}" style="color: white">{{ $pro->name_brand}}</option>
                        <option value="0">------------</option>
                        @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name_brand }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <br>
            <div class="user-box">
                <div class="wave-group">
                    <select class="input_2" name='parent'>
                        <option value="{{ $pro->id_category }}" style="color: white">{{ $pro->parent }}</option>
                        <option value="0">------------</option>
                        @foreach($cats as $cat)
                        <option value='{{ $cat->id_category }}'>{{ $cat->name_category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <br>

            <div class="user-box">
                <div class="wave-group">
                    <select class="input_2" name='id_category'>
                        <option value='{{ $pro->id_category }}' style="color: white">{{ $pro->child }}</option>
                        <option value="0">------------</option>
                        @foreach ($category as $cate)
                        <option value='{{ $cate->id_category }}'>{{ $cate->child }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <br>
            <br>





            <!-- <div class="input-container">
        <input required=""  class="input" id="input" type="number" name='quantity'>
        <label class="label" for="input">Quantity</label>
        <div class="underline"></div>
        <div class="sideline"></div>
        <div class="upperline"></div>
        <div class="line"></div>
    </div> -->


            <div class="user-box">
                <div class="input-container">
                    <input required="" class="input" id="input" type="number" name='price' value="{{$product->price}}">
                    <label class="label" for="input">Price</label>
                    <div class="underline"></div>
                    <div class="sideline"></div>
                    <div class="upperline"></div>
                    <div class="line"></div>
                </div>
            </div>

            <br>
            <br>

            <div class="input-container">
                <input required="" class="input" id="input" type="number" name="sale_price" value="{{$product->sale_price}}">
                <label class="label" for="input">Sale price</label>
                <div class="underline"></div>
                <div class="sideline"></div>
                <div class="upperline"></div>
                <div class="line"></div>
            </div>

            <br>
            <br>
            <div class="user-box">
                <div class="input-div">
                    <input class="input-1" name="image" type="file">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon">
                        <polyline points="16 16 12 12 8 16"></polyline>
                        <line y2="21" x2="12" y1="12" x1="12"></line>
                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                        <polyline points="16 16 12 12 8 16"></polyline>
                    </svg>
                </div>
            </div>

            <br>
            <div class="user-box">
                <textarea required="" name="Des" class="input" placeholder="Description">{{$product->Des}}</textarea>
            </div>
            <br>
            <br>
            <div class="user-box">
                <button type="submit" name='submit'>
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>