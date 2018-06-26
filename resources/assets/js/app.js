
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el:"#app",
    data:{
        posts:{},
        description:'',
        title:'',
        content:'',
    },
    mounted(){
    	this.getPosts();
    },
    methods:{
    	getPosts(){
    		axios.get('getpost')
    		.then((response)=>{
    			this.posts = response.data.reverse()
    		})
    		.catch(function(error){
    			console.log(error);
    		});
    	},    	
    	postContent(){
    		axios.post('home', {
    			description: this.description,
    			title:this.title,
    			content:this.content,
    		})
    		.then((response)=>{
    			this.posts.unshift(response.data);
    			this.description='';
    			this.title='';
    			this.content='';
    		})
    		.catch(function(error){
    			console.log(error);
    		})
    	},
    	one(data){
    		axios.post('star', {
    			star: 1,
    			post_id:data.id,
    		})
    		.then((response)=>{
    			console.log(response)    			
    			
    		})
    		.catch(function(error){
    			console.log(error);
    		})
    	}
    }
});
