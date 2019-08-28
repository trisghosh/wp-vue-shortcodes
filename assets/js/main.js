( function() {
  
  var vm = new Vue({
    el: document.querySelector('#mount'),
	    	data: {
	    	   message: 'Hello Vue!',
	    	   posts:null,
	    	   total_page:null,
	    	   total_posts:null,
	    	   posts_per_page:null
	    	},

	    	methods:{
	    	  fetchPosts: function(p = 1)
	    	  {
	    	  	console.log(p);
	    	  	
	    	    var url = vuesettings.base_url+'wp-json/wp/v2/posts?_embed&page='+p;
	    	    fetch(url).then((response)=>{
	    	    	this.total_posts=response.headers.get('X-WP-Total');
	    	    	this.total_page=response.headers.get('X-WP-TotalPages');
	    	    	this.posts_per_page=vuesettings.posts_per_page;
	    	      return response.json()
	    	      }).then((data)=>{
	    	        this.posts = data;
	    	        console.log(this.posts);
	    	      });
	    	  }
	    	 },
		   	mounted: function()
		   	{
		   		console.log("Hello Vue!");
		   		console.log("Component is mounted");

		   		  this.fetchPosts();
		   		  // setInterval(function () {
		   		  //  this.fetchPosts();
		   		  // }.bind(this), 5000);
		   	}
  });

})();