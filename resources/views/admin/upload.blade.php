<style>
    .form_1 {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.iLabel {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .cut {
  transform: translateY(8px);
}

.input:focus ~ .iLabel {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:focus) ~ .iLabel {
  color: #808097;
}

.input:focus ~ .iLabel {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}
.main{
    background-image: linear-gradient( to right, #0f0c29, #302b63, #24243e );
    height: 100%;
    border-radius: 10px;
    box-sizing: border-box;
}


</style>
<link rel="stylesheet" href="/css/add_new.css">
<div class="main">
<div class="form_1" style="margin-left: 600px;">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
      <div class="title">Upload file</div>

      <div class="input-container ic1">
        
        <select type="text" class="input" id="firstname" name="id_product">
        <div class="cut"></div>
        <option value="0">Choose product</option>
        <option value="0">---------------</option>
       @foreach($product as $pro): ?>
        <option class="iLabel" name='id_product' for="firstname" value="{{$pro->id_product}}">{{$pro->name}}</option>
        @endforeach
        </select>
      </div>

      <div class="user-box">
    <div class="input-div">
    <input class="input-1" name="file_upload" type="file" >
    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon"><polyline points="16 16 12 12 8 16"></polyline><line y2="21" x2="12" y1="12" x1="12"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
    </div>
    </div>
      <button class="submit" type="submit" name="submit">submit</button>
      </form>
    </div>
    </div>
   
</body>
</html> 