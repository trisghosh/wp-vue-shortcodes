<div id="mount">
	<div v-for="p in posts" :id="'post-'+p.id" v-if="p.title.rendered!==''" class="col-md-12" v-bind:key="p.id" style="margin-bottom: 20px;">
				
			<div v-if="p._embedded['wp:featuredmedia']">
				<div v-for="embed in p._embedded['wp:featuredmedia']" class="col-md-4">
					<a :href="p.link">	
						<img :src="embed.source_url" />
					</a>		
				</div>	
				<div class="col-md-8">
					<a :href="p.link">	
						<h3>{{ p.title.rendered }}</h3>
					</a>
					<div v-html="p.excerpt.rendered"></div>
				</div>		
			</div>
			<div v-else class="col-md-12">
				<a :href="p.link">	
					<h3>{{ p.title.rendered }}</h3>	
				</a>
				<div v-html="p.excerpt.rendered"></div>
			</div>	
			<div>
			  <a :href="p.link">Read More</a>
			</div>
			<div class="wp-author">
				<a :href="p._embedded.author[0].link">
					{{p._embedded.author[0].name.charAt(0).toUpperCase() + p._embedded.author[0].name.slice(1) }}
				</a>
			</div>

	</div>
	<div class="pagination">
		<ul>
			<li v-for="n in +total_page"><a href=""  @click.prevent="fetchPosts(n)">{{ n }}</a></li>
		</ul>
	</div>
	<!-- {{total_page}}
	{{posts_per_page}} -->
</div>