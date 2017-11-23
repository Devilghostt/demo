/**
 * Created by JUAN DAVID on 17/11/2017.
 */
function validatePassword() {
    var validator =$("#register").validate({
        rules: {
            password: "required",
            password2: {
                equalTo: "#password"
            }
        },
        messages: {
            password: "Ingrese la contraseña",
            confirmpassword: "Las contraseñas no coinciden"
        }
    });
    if (validator.form()) {
        alert('Sucess');
    }
}
