jQuery(document).ready(function(){jQuery("#submit").click(function(){var e=jQuery("input[name=name]"),t=jQuery("input[name=email]"),n=jQuery("input[name=website]"),r=jQuery("textarea[name=comment]");if(e.val()==""){e.addClass("hightlight");return!1}e.removeClass("hightlight");if(t.val()==""){t.addClass("hightlight");return!1}t.removeClass("hightlight");if(r.val()==""){r.addClass("hightlight");return!1}r.removeClass("hightlight");jQuery(".text").attr("disabled","true");jQuery(".loading").show();jQuery.post("../wp-content/themes/Tharsis/index.php",{name:e.val(),email:t.val(),comment:r.val(),submit:"yes"},function(){jQuery(".form").fadeOut("slow");jQuery(".done").fadeIn("slow")});return!1})});