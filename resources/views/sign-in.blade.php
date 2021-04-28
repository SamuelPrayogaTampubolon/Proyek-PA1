<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Desa Wisata Aek Situmandi - Halaman Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        section{
            background: url("img/Admin/bg2.jpg");
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }
        .form-container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 380px;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow:7px 7px 60px #000;
        }
        h1{
            color: #ffffff;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
        }
        .control input{
            padding: 10px;
            font-size: 16px;
            display: block;
            width: 100%;
            color:#000;
            background: #ddd;
            outline: none;
            border: none;
            margin: 1em 0;

        }
        .control .btn{
            color: #fff;
            text-transform: uppercase;
            background: rgb(0, 145, 77);
            opacity: .7;
            transition:opacity .3s ease;
        }
        .btn:focus{
            opacity: 1;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #fff;
            opacity: .7;
        }
        a:hover{
            opacity: 1;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-container">
            <h1>Login Admin</h1>
        <form action="index.html">
            <div class="control">
            <label for="name">Username</label>
            <input type="text" id="name" >
            </div>
            <div class="control">
            <label for="psw">Password</label>
            <input type="password" id="psw" >
            </div>
            <span><input type="checkbox"> Setuju dan Lanjutkan</span>
            <div class="control">
            <input type="submit" class="btn" value="Login">
            </div>
        </form>
        <p><a href="/">Sistem Informasi Desa Wisata Aek Situmandi</a></p>
        </div>
    </section>
</body>
</html>
