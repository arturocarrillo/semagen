$( document ).ready( main );
$( window ).scroll( function ( e ) {
  if ( $( this ).scrollTop( ) > 0 ) {
    document.getElementById( "headerjs" ).style.backgroundColor = 'rgb(255,255,255)';
  } else {
    document.getElementById( "headerjs" ).style.backgroundColor = 'rgba(255,255,255,0.7)';
  }
} );

var contador = 1;

function main( ) {
  $( '.menu_bar' ).click( function ( ) {
    if ( contador == 1 ) {
      $( '.navMov' ).animate( {
        left: '0'
      } );
      contador = 0;
    } else {
      contador = 1;
      $( '.navMov' ).animate( {
        left: '-100%'
      } );
    }
  } );
};