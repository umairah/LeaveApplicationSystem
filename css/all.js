$( function() {
    $( '#tabs' ).tabs({
        fx: { height: 'toggle', opacity: 'toggle' }
    });

    $.ajax({
        url: 'index.php/admin_con/readEmployee',
        dataType: 'json',
        success: function( response ) {
            $( '#readTemp' ).render( response ).appendTo( "#tabel" );
        }
    });

	$.ajax({
        url: 'index.php/admin_con/readCategory',
        dataType: 'json',
        success: function( response ) {
            $( '#readTemp2' ).render( response ).appendTo( "#tabel2" );
        }
    });

});