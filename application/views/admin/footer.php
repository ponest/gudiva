</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/admin/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/js/admin/dataTables.bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?= base_url() ?>assets/js/admin/plugins/morris/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/js/admin/plugins/morris/morris.min.js"></script>
<script src="<?= base_url() ?>assets/js/admin/plugins/morris/morris-data.js"></script>
<script>
    $('#mydata').dataTable();
</script>
<script>
    $(document).ready(function(){

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);

//        $('#edit_topic').click(function(){
//            var currentRow=$(this).closest("tr");
//            var id=currentRow.find("td:eq(0)").html();
//
//            $.ajax({
//                url: '<?//= base_url("admin/topics/update/")?>//' + id,
//                type: 'POST',
//                dataType: 'JSON',
//                success: function(){
//                    console.log("Mode Loaded");
//                },
//            });
//
//        });

        $('#delete_topic').click(function(){
            var currentRow=$(this).closest("tr");
            var id=currentRow.find("td:eq(0)").html();

            if(confirm("Are you sure you want to delete this Topic?")){
                $.ajax({
                   url: '<?= base_url("admin/topics/delete/")?>' + id,
                   type: 'POST',
                   dataType: 'JSON',
                    success: function(){
                       location.reload();
                    }
                });
            }
        });
    });

</script>
</body>

</html>
