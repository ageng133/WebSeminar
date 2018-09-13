var path = window.location.pathname;
var host = window.location.hostname;

 $(document).ready(function(){

        // alert(host+path+'peserta_data');
        show_product(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                // url   : "<?php echo base_url(); ?>Admin/pASDFASDFASDFASDFASDFta/pASDFASDFeserta_data/",
                url   : 'http://localhost/seminar/admin/peserta/peserta_data',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+(no++)+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].invoice+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-invoice="'+data[i].invoice+'" data-nim="'+data[i].nim+'" data-semester="'+data[i].semester+'" data-ots="'+data[i].ots+'" data-no_telp="'+data[i].no_telp+'" data-nama="'+data[i].nama+'" data-status="'+data[i].status+'" data-alamat="'+data[i].alamat+'" data-jurusan="'+data[i].jurusan+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save Peserta
        $('#btn_save').on('click',function(){

            var nama = $('#nama').val();
            var nim = $('#nim').val();
            var jurusan = $('#jurusan').val();
            var semester = $('#semester').val();
            var no_telp = $('#no_telp').val();
            var status = $('#status').val();
            var ots = $('#ots').val();
            var invoice = $('#invoice').val();
            var alamat = $('#alamat').val();

            $.ajax({
                type : "POST",
                // url   : "<?php echo base_url(); ?>Admin/peserta/save",
                url  : "http://localhost/seminar/admin/peserta/save",
                dataType : "JSON",
                data : {nama:nama , nim:nim, jurusan:jurusan, semester:semester, no_telp:no_telp, status:status, ots:ots, alamat:alamat, invoice: invoice },
                success: function(data){
                  // alert(data);
                    $('[name="nama"]').val("");
                    $('[name="nim"]').val("");
                    $('[name="jurusan"]').val("");
                    $('[name="semester"]').val("");
                    $('[name="no_telp"]').val("");
                    $('[name="status"]').val("");
                    $('[name="ots"]').val("");
                    $('[name="invoice"]').val("");
                    $('[name="alamat"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var nama = $(this).data('nama');
            var nim = $(this).data('nim');
            var jurusan = $(this).data('jurusan');
            var semester = $(this).data('semester');
            var no_telp = $(this).data('no_telp');
            var invoice = $(this).data('invoice');
            var status = $(this).data('status');
            var ots = $(this).data('ots');
            var alamat = $(this).data('alamat');
            var id = $(this).data('id');
            // alert(jurusan);

            $('#Modal_Edit').modal('show');
            $('[name="id_edit"]').val(id);
            $('[name="nama_edit"]').val(nama);
            $('[name="nim_edit"]').val(nim);
            $('[name="invoice_edit"]').val(invoice);
            $('[name="no_telp_edit"]').val(no_telp);
            $('[name="alamat_edit"]').val(alamat);
            $('[name="jurusan_edit"]').find('option[value="'+jurusan+'"]').attr('selected','selected');
            $('[name="semester_edit"]').find('option[value="'+semester+'"]').attr('selected','selected');
            $('[name="status_edit"]').find('option[value="'+status+'"]').attr('selected','selected');
            $('[name="ots_edit"]').find('option[value="'+ots+'"]').attr('selected','selected');
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var id = $('#id_edit').val();
            var nama = $('#nama_edit').val();
            var nim = $('#nim_edit').val();
            var jurusan = $('#jurusan_edit').val();
            var semester = $('#semester_edit').val();
            var no_telp = $('#no_telp_edit').val();
            var status = $('#status_edit').val();
            var ots = $('#ots_edit').val();
            var invoice = $('#invoice_edit').val();
            var alamat = $('#alamat_edit').val();


            $.ajax({
                type : "POST",
                url   : "<?php echo base_url(); ?>admin/peserta/update",
                // url  : "http://localhost/seminar/admin/peserta/update",
                dataType : "JSON",
                data : {nama:nama , nim:nim, jurusan:jurusan, semester:semester, no_telp:no_telp, status:status, ots:ots, alamat:alamat, invoice: invoice, id: id },
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="nim_edit"]').val("");
                    $('[name="jurusan_edit"]').find('option[value=""]').attr('selected','selected');
                    $('[name="semester_edit"]').find('option[value=""]').attr('selected','selected');
                    $('[name="status_edit"]').find('option[value="mahasiswa"]').attr('selected','selected');
                    $('[name="ots_edit"]').find('option[value="n"]').attr('selected','selected');
                    $('[name="no_telp_edit"]').val("");
                    $('[name="invoice_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        $('#Modal_Edit').on('hidden.bs.modal', function(e){
          $(this).find("input,textarea,select").val('').end();
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');

            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
            // alert(id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : "POST",
                // url   : "<?php echo base_url(); ?>admin/peserta/delete",
                url  : "http://localhost/seminar/admin/peserta/delete",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });



    });

