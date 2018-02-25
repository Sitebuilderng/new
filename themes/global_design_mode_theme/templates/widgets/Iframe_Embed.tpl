{*
{$editable.Iframe_Embed_Code}
*}
{assign var=link value=$editable.Iframe_Code|replace:'&width=560':''|replace:'width="560" height="315" ':''}

<style>{literal}.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }{/literal}</style><div class='embed-container'>{$editable.Iframe_Embed_Code}</div>