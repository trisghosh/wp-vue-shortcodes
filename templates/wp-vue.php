<div id="mount">
	<div v-if="posts != null ">
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
				  <a :href="p.link"><?php esc_html_e('Read More','wp-vue'); ?></a>
				</div>
				<div class="wp-author">
					<a :href="p._embedded.author[0].link">
						{{p._embedded.author[0].name.charAt(0).toUpperCase() + p._embedded.author[0].name.slice(1) }}
					</a>
				</div>

		</div>
		<div class="pagination">
			<ul class="page-numbers">
				<li>
					<a v-if="current_page > 1" href=""  @click.prevent="fetchPosts(current_page-1)">
						<i class="dashicons dashicons-arrow-left-alt2"></i>
					</a>
				</li>
				<li v-for="n in +total_page">
					<a v-if="current_page!=n" href=""  @click.prevent="fetchPosts(n)">{{ n }}</a>
					<a v-else="current_page!=n">{{ n }}</a>
				</li>
				<li>
					<a v-if="current_page < total_page" href=""  @click.prevent="fetchPosts(current_page+1)">
						<i class="dashicons dashicons-arrow-right-alt2"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="preloader-container" v-else>
		<img class="preloader" src="<?php echo WPVUE_PLUGIN_IMG_URI; ?>pageloader.gif">
	</div>
	
</div>
	
