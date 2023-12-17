<style>
    .main{
    background-image: linear-gradient( to right, #434343 0%, black 100%);
    width: 100%;
    height: 780px;
    box-sizing: border-box;
    border-radius: 10px;
}
</style>

<link rel="stylesheet" href="/css/add_new.css">

<div class="main">
<div class="login-box">
  <p>Add new shoes</p>
  <form action="{{ route('product.store') }}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="user-box">
      <input required="" name="name" type="text" class="name">
      <label>Name shoes</label>
    </div>
    <div class="user-box">
    
    </select>
    </div>
    <div class="user-box">
    <div class="wave-group">
    <select class="input_2" name='id_brand'>
    <option value='0' style ="color: white">Choose brand</option>
    <option>---------------</option>
   @foreach ($brands as $brand)
            <option value='{{ $brand->id }}'>{{$brand->name_brand}}</option>
        @endforeach
    </select>
    </div>
    </div>
    <br>
    <br>
    <div class="user-box">
    <div class="wave-group">
    <select class="input_2" name='id_category'>
    <option value='0' style ="color: white">Choose category</option>
    <option>---------------</option>
    @foreach($cats as $category) 
            <option value='{{ $category->id_category}}'>{{ $category->name_category}}</option>
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
    
    <br>
    <br>
   
    <div class="input-container">
        <input required=""  class="input" id="input" type="number" name='price'>
        <label class="label" for="input">Price</label>
        <div class="underline"></div>
        <div class="sideline"></div>
        <div class="upperline"></div>
        <div class="line"></div>
    </div>
    
    <br>
    <br>
    
    <div class="input-container">
        <input  required="" class="input" id="input" type="number" name="sale_price">
        <label class="label" for="input">Sale</label>
        <div class="underline"></div>
        <div class="sideline"></div>
        <div class="upperline"></div>
        <div class="line"></div>
    </div>
    
    <br>
    <br>
    <div class="user-box">
    <div class="input-div">
    <input class="input-1" name="file_upload" type="file" >
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon"><polyline points="16 16 12 12 8 16"></polyline><line y2="21" x2="12" y1="12" x1="12"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
    </div>
    </div>
    <br>
    <div class="user-box">
    <textarea required="" name="Des" class="input" placeholder="Description" ></textarea>
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
   