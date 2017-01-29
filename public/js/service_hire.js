Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
new Vue({

  el: '#vue_hire',

  data:{

      call: {
        plan: '',
        design: '',
        name: '',
        phone: '',
      },

      email: {
        plan: '',
        design: '',
        name: '',
        email: '',
      },

      mSuccessCall: false,
      mSuccessEmail: false,

  },

  computed:{

    mensajeSuccessCall: function(){
      return this.mSuccessCall;
    },

    mensajeSuccessEmail: function(){
      return this.mSuccessEmail;
    },

    mostrarSubmitCall: function(){
      return this.call.plan && this.call.design && this.call.name && this.call.phone;
    },

    mostrarSubmitEmail: function(){
      return this.email.plan && this.email.design && emailRE.test(this.email.email) && this.email.name;
    },

  },

  methods:{

    onSubmitFormCall: function(e){
      e.preventDefault();
      this.mSuccessCall = true;
      var call = this.call;
      this.call = {plan:'', design:'', name:'', phone:''};
      this.$http.post('/enviar/call', call);
    },

    onSubmitFormEmail: function(e){
      e.preventDefault();
      this.mSuccessEmail = true;
      var email = this.email;
      this.email = {plan:'', design:'', email:'', name:''};
      this.$http.post('/enviar/email', email);
    },

    cerrarMensajeCall: function(){
    	this.mSuccessCall = false;
    },

    cerrarMensajeEmail: function(){
    	this.mSuccessEmail = false;
    },

  },

});
