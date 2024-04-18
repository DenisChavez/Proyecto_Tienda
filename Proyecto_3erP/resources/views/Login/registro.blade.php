<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: none;
        }
        body {
            font-family: 'Quicksand', sans-serif;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        h2{
            text-align: center;
            margin-top: 24px;
            margin-bottom: 30px;
            font-size: 2.3rem;
        }
        .container-flex{
            display: grid;
            justify-content: center;
        }
        form{
            width: 450px;
            margin: auto;
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
            border-radius: 14px;
        }
        .mb-3{
            display: flex;
            flex-direction: column;
            margin-bottom: 44px;
        }
        .form-label{
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 2px;
            margin-bottom: 6px;
        }
        .form-input{
            width: 100%;
            height: 28px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .btn{
            width: 100%;
            height: 50px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #FC7C26;
            font-weight: bold;
            font-size: 16px;
            color: white;
            cursor: pointer;
            margin-bottom: 30px;
            box-shadow: 0 0 18px rgba(207, 83, 0, 0.5);
        }
        .btn:hover{
            background-color: #FB9049;
        }
        div > p{
            margin-bottom: 20px;
        }
        a{
            text-decoration: none;
            color: #0092D5;
        }
        a:hover{
            color: #01ABF9;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{route('validar-registro')}}" method="POST">
            @csrf
            <h2>Registro de usuario</h2>
                <div class="container-flex">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-input" id="nombre" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-input" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-input" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn">Registrarse</button>
                </div>
        </form>
    </div>
</body>
</html>