<?xml version='1.0' encoding='UTF-8'?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
	http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">


{foreach from=$sitemapPages item=item key=key name=loop1}
<url>
<loc>{$server_name}{if $item.homepage == "yes"}/{else}/{$item.url}/{/if}</loc>
{if $item.last_updated}<lastmod>{$item.last_updated|date_format:"%Y-%m-%dT%H:%M:%S"}+00:00</lastmod>
{/if}
<changefreq>always</changefreq>
<priority>1.0</priority>
</url>
{if $item.subs|@count>0}
{foreach from=$item.subs item=sub key=key2 name=loop2}
<url>
<loc>{$server_name}/{$item.url}/{$sub.url}/</loc>
{if $sub.last_updated}<lastmod>{$sub.last_updated|date_format:"%Y-%m-%dT%H:%M:%S"}+00:00</lastmod>
{/if}
<changefreq>always</changefreq>
<priority>0.7</priority>
</url>
{if $sub.subSubs|@count>0}
{foreach from=$sub.subSubs item=subSub key=key3 name=loop3}
<url>
<loc>{$server_name}/{$item.url}/{$sub.url}/{$subSub.url}/</loc>
{if $subSub.last_updated}<lastmod>{$subSub.last_updated|date_format:"%Y-%m-%dT%H:%M:%S"}+00:00</lastmod>
{/if}
<changefreq>always</changefreq>
<priority>0.6</priority>
</url>
{/foreach}
{/if}
{/foreach}
{/if}	
{if $item.blog=="yes" && $item.subs|@count<=0}
{foreach from=$blogPagesSitemap item=blogPage key=key name=loop1}
<url>
<loc>{$server_name}/{$item.url}/{$blogPage.url}/</loc>
<changefreq>always</changefreq>
<priority>0.5</priority>
</url>
{/foreach}
{/if}
{/foreach}
{foreach from=$nonLinkers item=item key=key name=loop1}
<url>
<loc>{$server_name}{if $item.homepage == "yes"}/{else}/{$item.url}/{/if}</loc>
{if $item.last_updated}<lastmod>{$item.last_updated|date_format:"%Y-%m-%dT%H:%M:%S"}+00:00</lastmod>
{/if}
<changefreq>always</changefreq>
<priority>0.5</priority>
</url>
{if $item.blog=="yes"}
{foreach from=$blogPagesSitemap item=blogPage key=key name=loop1}
<url>
<loc>{$server_name}/{$item.url}/{$blogPage.url}/</loc>
<changefreq>always</changefreq>
<priority>0.5</priority>
</url>
{/foreach}
{/if}
{/foreach}
</urlset>
