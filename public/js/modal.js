
// $('#visualiza').on('click',(function(){
//     $('.btn-danger').click( function(e){
//       confirmdelete(e);
//     });
// }));
$(document).ready(function(){
  $('.btn-danger').click( function(e){
    e.preventDefault();
    Swal.fire({
        title: 'Você tem Certeza que Deseja Excluir este Registro ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Apaga'
      }).then((result) => {
        if (result.value) {
          $(document).ready(function(){
            $(e.target).closest('form').submit();
          });
        }
      })
  });
});
$('#detalhes').on('show.bs.modal', function (event) {                                              
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipientId    = button.data('id')             
  var recipientNome = button.data('nome')
  var modal=$(this)
  var objectValue=[recipientId,recipientNome]
  // var objectValue= {
  //   'recipientId' : recipientId,
  //   'recipientNome' : recipientNome
  // }
  $.ajax({
    type: 'GET',
    url: `/return/${objectValue}`,
    dataType: 'json',
    data: objectValue,
  
    success: function(result) {
      var pedidos= result[0];
      var products= result[1];
      var total= result[2];
      console.log(pedidos[0].value,products[0]);
      recipientId=`Detalhes Pedido ${recipientId}`;
      console.log(recipientId);
      modal.find('#exampleModalLabel').val(recipientId) 
      modal.find('#nome').val(recipientNome)
      $("#table-detalhe > tbody tr").remove();
      for (let i= 0; i <  pedidos.length; i++) {
        let lineTable =
        `<tr>
          cols+=<td> <img src="/storage/${products[i][0].image}" alt="{{${products[i][0].name}}}" style="max-width:100px"></td>
          <td ><input name='produtc_name' style="border:none" value="${products[i][0].name}" id='produtc_name' class='form-control text-center'></td>
          <td><input name='price' style="border:none" value="${pedidos[i].value}" id='price' class='form-control text-center'></td>
          <td><input type="text" name='qtd' style="border:none" class="form-control text-center" value="${pedidos[i].qtd}" id="qtd" ></td>
          <td><input name='subtotal' style="border:none" value="${pedidos[i].value*pedidos[i].qtd}" id='subtotal' class='form-control text-center'></td>                              
        </tr>`;
        $("#table-detalhe > tbody").append(lineTable);
        
      }
      let lineTable =
      `<tr>
        cols+=<td>Total</td>
        <td ></td>
        <td></td>
        <td></td>
        <td><input name='total' style="border:none" value="${total}" id='total' class='form-control text-center'></td>                              
      </tr>`;
      $("#table-detalhe > tbody").append(lineTable);
    }
  });
})

// $(document).ready(function(){
//   $('.btn-danger').click( function(e){
//     confirmdelete(e);
//   });
// });
// function confirmdelete(e)
// {
//   $(document).ready(function(){
//     e.preventDefault();
//     Swal.fire({
//         title: 'Você tem Certeza que Deseja Excluir este Registro ?',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Apaga'
//       }).then((result) => {
//         if (result.value) {
//           $(document).ready(function(){
//             // $(e.target).find('.form-danger').submit();
//             // $(e.target).closest('form').submit();
//           });
//         }
//       })
//   });
    
// }
