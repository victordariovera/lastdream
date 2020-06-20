
// Se ejecuta cuando se abra el modal de confirmacion de borrado de entrada


$(document).on('show.bs.modal','#borrarModal', function (event) {
    // Busco el id de la entrada
    var dreamId = $(event.relatedTarget).attr('dreamId');
    $('#formBorrarModal').attr('action', dreamId);
  })





