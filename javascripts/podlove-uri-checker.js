$(document).ready( function () {
	$("#provided-uri").keyup( function () {
		update_urls();
	} );

	update_urls();
} );

function update_urls() {
	$(".url-row").each( function(index, row) {
		uri = $("#provided-uri").val();
		url = window.location.origin + window.location.pathname;
		link = uri + $(this).data('feed-url');
		get_attribute = url.indexOf('?') == -1 ? "?uri=" : "&uri=";
		get_uri = uri !== '' ? get_attribute + encodeURIComponent(uri) : '';

		$(row).html('<a href="' + link + '">' + link + '</a>');
		$("#share").val(url + get_uri);
	} );
}