
$( function() {
  // Draggable element
  $( ".draggable" ).draggable({ revert: true, zIndex: 100 });
  // Droppable element
  $( "#featured, .teaser" ).droppable({
     hoverClass: 'isHover',
     tolerance: "pointer",
    // Function for handling Drop event
    drop: function( event, ui ) {
      var draggableId = ui.draggable.attr("id");
      var droppableId = $(this).attr("id");
      // Reload new droped element into droppable
      $(this).load("droppable.php", {"targetID[]": [draggableId, droppableId] });
      // Store changes into database
      $.ajax({
            type: "GET",
            url: "publish.php?id="+draggableId+"&place="+droppableId,
        });
        // Event after draggable droped
        $("#info").text("Document have been changed.")
        // After Drop event and storing into database, reload droppable element
        setTimeout(function(){
          $("#draggable").load("draggable.php")
          .on( "mouseover", function() {
            $( ".draggable" ).draggable({ revert: true, zIndex: 100 });
          });
        }, 100);

    }
  });
});
