var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    bindEvents: function () {       
        document.addEventListener('deviceready', this.onDeviceReady, false);       
    },
    // deviceready Event Handler
    onDeviceReady: function () {
        navigator.notification.alert("Tu aplicacion a inicializado con exito.", function () {
        }, "Bienvenido", "Aceptar");
        document.getElementById("beep").addEventListener("click", app.Beep, false);
        document.getElementById("sendmessage").addEventListener("click", app.SendMessage, false);
    },
    Beep: function () {
        navigator.notification.beep(1);
    },
    SendMessage: function () {
        if ($("#nombre").val().replace(/ /g, "") == "") {
            navigator.notification.alert("Ingrese su Nombre.", function () {
            }, "Alerta", "Aceptar");
            return;
        }
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {
            navigator.notification.alert("Ingrese su Email.", function () {
            }, "Alerta", "Aceptar");
            return;
        }
        if ($("#asunto").val().replace(/ /g, "") == "") {
            navigator.notification.alert("Ingrese su Asunto.", function () {
            }, "Alerta", "Aceptar");
            return;
        }
        if ($("#message").val().replace(/ /g, "") == "") {
            navigator.notification.alert("Ingrese su Mensaje.", function () {
            }, "Alerta", "Aceptar");
            return;
        }
        //Aqui estara el codigo para conectarnos a nuestro Mobile Service e insertar los datos
    }
};
