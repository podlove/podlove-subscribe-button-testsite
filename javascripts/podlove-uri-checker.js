$(document).ready( function () {
	$("#provided").keyup( function () {
		update_urls();
	} );

	$("#perform_post_request").click( function () {
		if ( $("#provided").val() == '' )
			return;

		if ( $(this).prop('checked') ) {
			$(".url-row a").each( function (index, link) {
				$(link).data( 'link', $(link).attr('href') );
				$(link).attr('href', $("#provided").val());
			} );
		} else {
			$(".url-row a").each( function (index, link) {
				$(link).attr('href', $(link).data('link'));
			} );
		}

		update_urls();
	} );

	update_urls();
} );

function update_urls() {
	$(".url-row").each( function(index, row) {
		uri = $("#provided").val();
		url = window.location.origin + window.location.pathname;
		link = uri + $(this).data('feed-url');
		get_attribute = url.indexOf('?') == -1 ? "?uri=" : "&uri=";
		get_uri = uri !== '' ? get_attribute + encodeURIComponent(uri) : '';

		if ($("#perform_post_request").prop('checked') == false) {	
			$(row).html('<a href="' + link + '">' + link + '</a>');
			post = '';
		} else {
			$(row).html('<a href="' + $(this).data('feed-url') + '">' + $(this).data('feed-url') + '</a>');
			post = '&post';
		}

		$("#share").val(url + get_uri + post);
	} );

	handle_link_logic();
}

function handle_link_logic() {
	$(".url-row a").on( 'click', function ( event ) {
		if ($("#perform_post_request").prop('checked')) {
			event.preventDefault();
			$("input[name=url]").val( $(this).attr('href') );
			$("form[name=podlove-button-feed-test]").attr( 'action', $("#provided").val() );
			document.forms['podlove-button-feed-test'].submit();
		}
	} );
}