{{--data-table script--}}
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
{{--End data-table script--}}
{{--dependent subcategory select --}}
<script>
    function getSubcategory(categoryId){

        $.ajax({
            type:"GET",
            url:"{{route('get-all-sub-category')}}",
            data:{id:categoryId},
            dataType:"JSON",
            success:function(response){
               var option ='';
               option+='<option>--Select Sub-Category--</option>';
               $.each(response,function (key,value) {
                   option+='<option value="'+value.id+'">'+value.name+'</option>';
               })
                var subCategoryId=$('#subCategoryId');
               subCategoryId.empty();
               subCategoryId.append(option);
            }
        });


    }
</script>
