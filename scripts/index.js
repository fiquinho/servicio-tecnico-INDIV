$(".login-button").click(function(){
            $(".user").html("");
            $(".password").html("");

            var username = $("#user").val();
            var password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "login-check.php",
                data: { username: username,
                        password: password }
            }).done(function( response ) {
                switch(response) {
                    case "No username":
                        $(".user").html("Por favor ingrese su usuario");
                        break;
                    case "No password":
                        $(".password").html("Por favor ingrese su contraseña");
                        break;
                    case "Wrong user":
                        $(".user").html("El usuario no se encuentra registrado");
                        break;
                    case "Wrong password":
                        $(".password").html("La contraseña ingresada no es válida");
                        break;
                    default:
                        window.location = 'dashboard/dashboard.php'
                        break;
                }
            });    
        });