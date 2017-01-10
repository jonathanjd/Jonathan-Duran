Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
var app = new Vue({

  el:'#app',

  //data start
  data:{

    course:{
      name:'',
      image:'',
      content:'',
      list:[]
    },

  },
  //data end

  ready: function(){
    this.list_course();
  },

  //methods start
  methods:{

    //list_course start
    list_course: function(){
      this.$http.get('/admin/api/course').then((response) =>{
        var courses = JSON.parse(response.body);
        this.course.list = courses;
      },(response) => {
        console.log('Error Api');
      });
    },
    //list_course end

    //save_course start
    save_course: function(){
      console.log(this.course.image + ' ' + this.course.name + ' ' + this.course.content);
    },
    //save_course end
  }
  //methods end


})
