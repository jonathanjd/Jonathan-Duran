Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
new Vue({

  el: 'body',

  data:{

      enviarCorreo: {
        nombre: '',
        correo: '',
        mensaje: '',
      },

      mSuccess: false,

  },

  computed:{

    mensajeSuccess: function(){
      return this.mSuccess;
    },

    mostrarSubmit: function(){
      return this.enviarCorreo.nombre && emailRE.test(this.enviarCorreo.correo) && this.enviarCorreo.mensaje;
    },

  },

  methods:{

    onSubmitForm: function(e){
      e.preventDefault();
      this.mSuccess = true;
      var correo = this.enviarCorreo;
      this.enviarCorreo = {nombre:'', corre:'', mensaje:''};
      this.$http.post('enviar/correo', correo);
    },
    
    cerrarMensaje: function(){
    	this.mSuccess = false;
    },

  },

});
