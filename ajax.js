// $('#deleteAjax').on('crud_projet', function(event) {
//     var button = $(event.relatedTarget)
//     var id = button.data('id')
//     $('#id_projet').val(id);
//     $('#deleteAjax').click(function(){
//       $.ajax({
//         url: 'delete.php',
//         type: 'POST',
//         data: {
//           id: id
//         },
//         success: function(data){
//           console.log(data);
//           location.reload();
//         }
//       });
//     });
//   })

function deleteAjax(id_projet, event){
 $.post("delete.php", {
  id_projet: id_projet
 }, function(data){

 })

var projet = event.target.parentNode.parentNode.parentNode;
console.log(projet)

projet.style.transition = "opacity 0.2s";
projet.style.opacity = "0";
setTimeout(function() {
  projet.style.display = "none";
}, 200);


}