$(document).ready(function(){

	var pathname = window.location.pathname;
	console.log(pathname);

	if (pathname == "/site/index.php" || pathname == "/site/index.php/") {
		addActiveClass(0);
	} else if (pathname == "/site/index.php/consulting") {
		addActiveClass(1);
	} else if (pathname == "/site/index.php/training") {
		addActiveClass(2);
	// else if (pathname == "/site/index.php/resources") {
	// 	addActiveClass(3);
	} else if (pathname == "/site/index.php/contact") {
		addActiveClass(3);
	}
});

function addActiveClass(_num) {
	$(".navbar-nav > li").eq(_num).addClass("active");
}