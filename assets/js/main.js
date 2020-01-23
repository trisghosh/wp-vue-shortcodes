( function() {
  
  var vm = new Vue({
    el: document.querySelector('#mount'),
	    	data: {
	    	   message: 'WordPress Vue ShrotCode!',
	    	   posts:null,
	    	   total_page:null,
	    	   total_posts:null,
	    	   posts_per_page:null,
	    	   current_page:null
	    	},
	    	methods:{
	    		handleScroll (event) {
	    			console.log(window.scrollY );
			    },
	    	  	fetchPosts: function(p = 1)
	    	  	{	    	  	
		    	  	this.$data.posts=null;
		    	    var url = vuesettings.base_url+'wp-json/wp/v2/posts?_embed&page='+p+'&per_page='+vuesettings.posts_per_page;
		    	    console.log(vuesettings.offset);
		    	    if(vuesettings.offset)
		    	    {
		    	    	url=url+'&offset='+vuesettings.offset;
		    	    }
		    	    if(vuesettings.order)
		    	    {
		    	    	url=url+'&order='+vuesettings.order;
		    	    }
		    	    if(vuesettings.orderby)
		    	    {
		    	    	url=url+'&orderby='+vuesettings.orderby;
		    	    }
		    	    console.log(url);
		    	    fetch(url).then((response)=>{
		    	  		this.data='';
		    	    	this.total_posts=response.headers.get('X-WP-Total');
		    	    	this.total_page=response.headers.get('X-WP-TotalPages');
		    	    	this.posts_per_page=vuesettings.posts_per_page;
		    	    	this.current_page=p;
		    	      return response.json()
		    	      }).then((data)=>{
		    	      	setTimeout(() => { this.posts = data; }, 2000);	    	       
		    	    });
		    	}
	    	},
    	 	created () 
    	 	{
		        window.addEventListener('scroll', this.handleScroll);
			},
		   	mounted: function()
		   	{
		   		//Mounted
		   		this.fetchPosts();
		   		document.addEventListener('scroll', this.fetchPosts());
		   	},
		   	destroyed () {
		        clearInterval(this.interval);
		   		document.removeEventListener('scroll', this.fetchPosts());
		    }
  });

})();