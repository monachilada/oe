jQuery(document).ready(function(e){e("body.home a").each(function(){var t=e(this),n=e("body").data("baseurl"),r=t.attr("href").replace(n,"").replace(/\//gi,"");if(r!="#"){r==""&&(r=e("body > section:first").attr("id"));var i=e("#"+r);i.size()>0&&t.attr("href","#"+r)}});e("body").on("click","nav.carousels-nav a",function(t){t.preventDefault();var n=e(this),r=n.data("carousel"),i=n.parents("nav.carousels-nav").prev(".carousels");i.height(i.height());e('.carousel:visible:not([data-carousel="'+r+'"]):not(:animated)',i).fadeOut("slow",function(){e('.carousel[data-carousel="'+r+'"]',i).fadeIn("slow",function(){i.height("")})})})});