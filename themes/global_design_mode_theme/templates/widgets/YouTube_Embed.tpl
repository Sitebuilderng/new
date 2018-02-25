{*
{$editable.YouTube_Page}
*}
{assign var=link value=$editable.YouTube_Page|strip_tags|trim|replace:'https://www.youtube.com/watch?v=':'https://www.youtube.com/embed/'|replace:'http://www.youtube.com/watch?v=':'https://www.youtube.com/embed/'}

{literal}<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>{/literal}<div class='embed-container'><iframe src='{$link}' frameborder='0' allowfullscreen></iframe></div>