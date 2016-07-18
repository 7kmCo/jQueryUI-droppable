
$( function() {
  $( ".draggable" ).draggable({ revert: true, zIndex: 100 });
  $( "#featured, .teaser" ).droppable({
     hoverClass: 'isHover',
     tolerance: "pointer",
    drop: function( event, ui ) {
      var draggableId = ui.draggable.attr("id");
      var droppableId = $(this).attr("id");
      $(this).load("droppable.php", {"targetID[]": [draggableId, droppableId] });
      ui.draggable.remove();
      $.ajax({
            type: "GET",
            url: "publish.php?id="+draggableId+"&place="+droppableId,
        });
        $("#info").text("Document have been changed.")
        //setTimeout(function(){$("#draggable").load("draggable.php");}, 100);
        //location.reload();
    }
  });
});
