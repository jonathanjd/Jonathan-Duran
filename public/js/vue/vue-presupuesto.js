Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
new Vue({

  el:'#app',

  data:{
    design_admin: 0,
    hosting:0,
    blog: 0,
    car: 0,
    total:0,
    selectedBlog:'',
    selectedCar:'',
    varAjax:{
      blog:0,
      car:0
    }
  },

  computed:{

    presupuesto_total: function(){

      

      if (this.selectedBlog == 'si' && this.selectedCar == 'no') {
        this.blog = this.varAjax.blog;
        this.total = this.design_admin + this.hosting + this.blog;
        return this.total;

      }else if (this.selectedBlog == 'no' && this.selectedCar == 'si') {
        this.car = this.varAjax.car
        this.total = (this.design_admin + this.hosting + this.car);
        return this.total;

      }else if (this.selectedBlog == 'si' && this.selectedCar == 'si') {
        this.blog = this.varAjax.blog;
        this.car = this.varAjax.car;
        this.total = (this.design_admin + this.hosting + this.blog + this.car);
        return this.total;

      } else {
        this.total = this.design_admin + this.hosting;
        return this.total;
      }
    },

  },

  ready: function(){
    this.getServices();
  },

  methods:{

    getServices: function(){

      this.$http.get('/api/services').then((response) => {
        var services = JSON.parse(response.body);
        this.design_admin = services[0].price;
        this.hosting = services[3].price;
        this.varAjax.blog = services[2].price;
        this.varAjax.car = services[1].price;

      },(response) => {
        console.log('Error Api');
      });

    },

    }


})
