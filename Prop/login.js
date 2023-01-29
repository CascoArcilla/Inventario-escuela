function definirLogin(){
    let valor = document.getElementById("tipo").value;

    switch(valor){
        case "super": document.getElementById("login-user").innerHTML=textSuper; break;
        case "normal": document.getElementById("login-user").innerHTML=textNormal; break;
        default: document.getElementById("login-user").innerHTML=textDefault; break
    }
}

const textSuper = 
`<div id="form-super" class="box">
<form action="">
    <label for="user">Usuario: <br> <input id="user" type="text" name="user" placeholder="Ingrese su usuario" required></label><br>
    <label for="pass">Contraseña: <br><input id="pass" type="password" name="pass" required></label><br>
    <br>
    <button>Ingresar</button>
</form>
</div>`;

const textNormal = 
`<div id="form-user" class="box">
<form action="">
    <label for="user-">Usuario: <br><input id="user-" type="text" name="user-" placeholder="Ingrese su usuario" required></label><br>
    <br>
    <button>Ingresar</button>
</form>
</div>`;

const textDefault = `<p>Por favor seleccione una el tipo de usuario</p>`;