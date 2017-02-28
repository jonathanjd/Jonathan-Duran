Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

new Vue({

  el:'#vue-social',

  data:{

    social:{
      correo:'',
      facebook:'',
      twitter:'',
      youtube:'',
      google:'',
      linkedin:'',
      pinterest:'',
      instagram:'',
      tumblr:'',
      data: {},
    },

    mSuccess: false,

  },

  computed:{

    mensajeSuccess: function(){
      return this.mSuccess;
    },

    mostrarSubmit: function(){
      return emailRE.test(this.social.correo) || this.social.facebook || this.social.twitter
              || this.social.youtube || this.social.google || this.social.linkedin
              || this.social.pinterest || this.social.instagram || this.tumblr;
    },

  },

  ready: function(){
    this.getSocialData();
  },

  methods:{

    onSubmitForm: function(e){
      e.preventDefault();
      var socialData = this.social;
      this.$http.post('/admin/social/save/ajax', socialData);
      this.mSuccess = true;
      this.getSocialData();
    },

    getSocialData: function(){
      this.$http.get('/admin/social/show/ajax').then(function (response){
        this.social.data = response.data;
        this.social.correo = this.social.data.correo;
        this.social.facebook = this.social.data.facebook;
        this.social.twitter = this.social.data.twitter;
        this.social.youtube = this.social.data.youtube;
        this.social.google = this.social.data.google;
        this.social.linkedin = this.social.data.linkedin;
        this.social.pinterest = this.social.data.pinterest;
        this.social.instagram = this.social.data.instagram;
        this.social.tumblr = this.social.data.tumblr;
      });
    },

    cerrarMensaje: function(){
    	this.mSuccess = false;
    },

  }


})
