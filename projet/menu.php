    <div id="leftside">
    <div id="firstpane" class="menu_list">
    	<p class="menu_head"><a href="search_resultat.php?id_category=1">High-Tech et Informatique</a></p>
    	<p class="menu_head"><a href="search_resultat.php?id_category=2">Jouets, Enfants et Bébés</a></p>
    	<p class="menu_head"><a href="search_resultat.php?id_category=3">Maison et Bricolage</a></p>
    	<p class="menu_head"><a href="search_resultat.php?id_category=4">Beauté, Santé, épicerie</a></p>
    	<p class="menu_head"><a href="search_resultat.php?id_category=5">Vêtements et Chaussures</a></p>
        <p class="menu_head"><a href="search_resultat.php?id_category=6">Sports et Loisirs</a></p>
    </div>
    <script type=text/javascript>
	$(document).ready(function(){
		$("#firstpane .menu_body:eq(0)").show();
		$("#firstpane p.menu_head").click(function(){
			$(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
			$(this).siblings().removeClass("current");
		});
		$("#secondpane .menu_body:eq(0)").show();
		$("#secondpane p.menu_head").mouseover(function(){
			$(this).addClass("current").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
			$(this).siblings().removeClass("current");
		});
		
	});
	</script>
    </div>