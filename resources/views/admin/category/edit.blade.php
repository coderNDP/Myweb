<style>
    .group {
        position: relative;
    }

    .form {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        border: 1px solid white;
        padding: 120px 40px;
        padding-top: 60px;
        padding-bottom: 90px;
        padding-right: 40px;
        padding-left: 40px;
        background-color: black;
        border-radius: 20px;
        position: relative;
        width: 500px;
        top: 200px;
        left: 500px;
    }

    .form p {
        padding-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        letter-spacing: .5px;
        color: white;
    }

    .main-input {
        font-size: 16px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 185px;
        border: none;
        border-bottom: 1px solid #6c6c6c;
        background: transparent;
        color: #ffffff;
    }

    .main-input:focus {
        outline: none;
        border-bottom-color: #42ff1c;
    }

    .lebal-email {
        color: #999999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .main-input:focus~.lebal-email,
    .main-input:valid~.lebal-email {
        top: -20px;
        font-size: 14px;
        color: #42ff1c;
    }

    .highlight-span {
        position: absolute;
        height: 60%;
        width: 0px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    .main-input:focus~.highlight-span {
        -webkit-animation: input-focus 0.3s ease;
        animation: input-focus 0.3s ease;
    }

    @keyframes input-focus {
        from {
            background: #42ff1c;
        }

        to {
            width: 185px;
        }
    }

    .submit {
        margin-top: 1.2rem;
        padding: 10px 20px;
        border-radius: 10px;
        border-color: #42ff1c;
    }

    .main {
        background-image: linear-gradient(to right, #434343 0%, black 100%);
        width: 100%;
        height: 780px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>

<div class="main">
    <form class="form" action="{{ route('category.update', $category->id_category) }}" method="POST">
        @csrf  @method('PUT')
        <p>Update category</p>
        <div class="group">
        
            <input required="true" class="main-input" type="text" name="name_category" value="{{ $category->name_category}}">

            <span class="highlight-span"></span>
            <label class="lebal-email">Category's name</label>
        </div>
        <br>
        <div class="container-1">
            <div class="group">
                <select name='category-parent' class="main-input">
                    <div style="color: black;">
                        <option value='0' style="color: black;">Main category</option>
                        <option style="color: black;">------- Choose main category --------</option>


                        @foreach ($category as $cat)
                         @if(isset($cat) && $cat instanceof \App\Models\Category)
                            @if($cat->level == 0)
                             <option style='color: black;' value='{{ $cat->id_category }}'>{{ $cat->name_category }}</option>
                             @else
                                <option style="color: black;" value='{{ $cat->id_category }}' {{ $cat->id_cha == $cat->id_category ? "selected" : "" }}>
                                     {{ $cat->name_category }}
                                 </option>
                             @endif
                            @endif
                        @endforeach


                </select>
                <span class="highlight-span"></span>
            </div>
        </div>
        <button class="submit" type="submit" name="add-new">Save</button>
    </form>
</div>
</body>

</html>