# Wordpress  plugin: `rest-api-for-wp-jobsearch-plugin`
Wordpress plugin to add WP REST API support for jobs in Jobsearch plugin. This plugin applies two very simple filters to make the jobs available in het WP REST API.

Upload the `rest-api-for-wp-jobsearch-plugin` folder into your wordpress plugins folder and activate the plugin in the Wordpress admin.

Now visit the WP REST endpoint for the Jobsearch `job` custom post type.

It should be available at `https://your-domain.org/wp-json/wp/v2/job`