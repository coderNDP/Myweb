<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>
</head>

<body>
    <style>
        .main {
            background-image: linear-gradient(109.6deg, rgba(156, 252, 248, 1) 11.2%, rgba(110, 123, 251, 1) 91.1%);
            width: 100%;
            height: 780px;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 500px;
            height: 400px;
            gap: 10px;
            margin-left: 500px;
            background-color: white;
            padding: 2.5em;
            border-radius: 25px;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
            background-color: pink;
        }

        .form:hover {
            transform: translateX(-0.5em) translateY(-0.5em);
            border: 1px solid #171717;
            box-shadow: 10px 10px 0px #666666;
        }

        .heading {
            color: black;
            padding-bottom: 2em;
            text-align: center;
            font-weight: bold;
        }

        .input {
            border-radius: 5px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            outline: none;
            padding: 0.7em;
            transition: .4s ease-in-out;
        }

        .input:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
        }

        .input:focus {
            background: #ffffff;
            box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .form .btn {
            width: 200px;
            font-size: 18px;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 2em;
            align-self: center;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: black;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
        }

        .form .btn:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
            transform: translateX(-0.5em) translateY(-0.5em);
        }

        .form .btn:active {
            transition: .2s;
            transform: translateX(0em) translateY(0em);
            box-shadow: none;
        }

        .form p {
            font-size: 20px;
            padding-left: 130px;
        }
    </style>
    <div class="main">
        <form class="form" role="form" action="" method="post">
            @csrf
            <h1 class="heading">Sign up</h1>
            <input  class="input" name="username" placeholder="Username" type="text">
            @error('username') <small style="color: red;">{{ $message }}</small> @enderror
            <input  class="input" name="email" placeholder="Email" type="email">
            @error('email') <small style="color: red;">{{ $message }}</small> @enderror
            <input  class="input" name="password" placeholder="Password" type="password">
            @error('password') <small style="color: red;">{{ $message }}</small> @enderror
            <input  class="input" name="rpt_password" placeholder="Repeat password" type="password">
            @error('rpt_password') <small style="color: red;">{{ $message }}</small> @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>