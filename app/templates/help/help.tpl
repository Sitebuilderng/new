<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/admin/css/normalize.css">
        <link rel="stylesheet" href="/admin/css/help.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,800|Muli" rel="stylesheet">
		
    </head>
    <body {if $sales}class="sales"{/if}>


       	<div id='branding'><a href="#" id="searchLink">s</a><a href="#" id="menuLink">m</a>{if $sales}SetSeed: Fully-featured white-label CMS platform for resellers{else}Knowledge Base{/if}</div>
		<div id="topic-container" class="clearfix">
			{if $sales}
			<div id="salesHeader" class="clearfix">
				<a id="start" href="https://secure.setseed.com/auth/singup" target="_blank">Get started with 30 days free</a>
				<a id="signin" href="https://secure.setseed.com/auth/login" target="_blank">Login</a>
				<div id="search-mini">Search</div>
			</div>
			{/if}
			
			<div id="topic-container-inner">
				
			</div>
			<a href="#" id="next-icon">Next</a>
			<a href="#" id="prev-icon">Previous</a>
		</div>
		<div id="search">
			<div id="search-input"><input placeholder="Search Knowledge Base" /></div>
			<div id="search-results"></div>
		</div>
		<div id="tree">
			
			<div id="logo"><img src="/admin/graphics/branding.php?i=l&amp;v=2" /></div>

			<ul>
			{foreach from=$tree item=tree}
				{if $tree.children}
				<li {if $tree.popups}class="hidden"{/if}>
					<a href="{if !$tree.children}#{$tree.id}{/if}" {if !$tree.children}class="article"{/if}>{$tree.name}</a>
					{if $tree.children}
						<ul>
						{foreach from=$tree.children item=child1}
						<li>
							<a href="{if !$child1.children}#{$child1.id}{/if}" {if !$child1.children}class="article"{/if}>{$child1.name}</a>
							{if $child1.children}
								<ul>
								{foreach from=$child1.children item=child2}
								<li>
									<a href="{if !$child2.children}#{$child2.id}{/if}" {if !$child2.children}class="article"{/if}>{$child2.name}</a>
									{if $child2.children}
										<ul>
										{foreach from=$child2.children item=child3}
										<li>
											<a href="{if !$child3.children}#{$child3.id}{/if}" {if !$child3.children}class="article"{/if}>{$child3.name}</a>
											{if $child3.content}
											<div class="content">{$child3.content}
											{assign var=id value=$child3.id}
											{if $linkfroms.$id}
											<h4 class="seealso">See also</h4>
											<p>
											{foreach from=$linkfroms.$id item=linkfrom}
												<a href="#{$linkfrom[0]}">{$linkfrom[1]}</a><br/>
											{/foreach}
											</p>
											{/if}
											</div>
											{/if}
										</li>
										{/foreach}
										</ul>
									{else}
									<div class="content">{$child2.content}
									{assign var=id value=$child2.id}
									{if $linkfroms.$id}
									<h4 class="seealso">See also</h4>
									<p>
									{foreach from=$linkfroms.$id item=linkfrom}
										<a href="#{$linkfrom[0]}">{$linkfrom[1]}</a><br/>
									{/foreach}
									</p>
									{/if}
									
									</div>
									{/if}
								</li>
								{/foreach}
								</ul>
							{else}
							<div class="content">{$child1.content}
							
							{assign var=id value=$child1.id}
							{if $linkfroms.$id}
							<h4 class="seealso">See also</h4>
							<p>
							{foreach from=$linkfroms.$id item=linkfrom}
								<a href="#{$linkfrom[0]}">{$linkfrom[1]}</a><br/>
							{/foreach}
							</p>
							{/if}
							</div>
							{/if}
						</li>
						{/foreach}
						</ul>
					{else}
					<div class="content">{$tree.content}

						{assign var=id value=$tree.id}
						{if $linkfroms.$id}
						<h4 class="seealso">See also</h4>
						<p>
						{foreach from=$linkfroms.$id item=linkfrom}
							<a href="#{$linkfrom[0]}">{$linkfrom[1]}</a><br/>
						{/foreach}
						</p>
						{/if}
					</div>
					{/if}
				</li>
				{/if}
			{/foreach}
			</ul>
		</div>
		<div id="popupouter">
		<div id="popup">
			<a href="#" id="closePopup">Close</a>
			<div id="popupContents"></div>
		</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/javascripts/jquery.3.2.js"><\/script>')</script>
        <script src="/admin/javascripts/help.js"></script>

      
	  
    </body>
</html>