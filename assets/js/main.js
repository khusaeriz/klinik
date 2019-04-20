$(document).ready(function () {
   var selectDokter = $('.select2-dokter').select2({
        placeholder: "Pilih Dokter",
        ajax: {
            url: window.baseUrl + "api/dokter/search",
            dataType: 'json',
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        
                        return {
                            text: item.nama,
                            slug: item.nama,
                            id: item.kd_dokter
                        }
                    })
                };
            }
        }
   });
   
   var selectPasien = $('.select2-pasien').select2({
       placeholder: "Pilih Pasien",
       ajax: {
           url: window.baseUrl + "api/pasien/search",
           dataType: 'json',
           processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    
                    return {
                        text: item.kd_pasien + " - " +item.nama,
                        slug: item.nama,
                        id: item.kd_pasien
                    }
                })
            };
        }
       }
   }).on('select2:open', function (e) {
        $(".select2-results:not(:has(a))").prepend('<a href="#" data-toggle="modal" data-target="#add-pasien" class="btn-in-select2">Tambah Data Pasien</a>')
                                          .on('click', function(e) {
                                              $('.select2-pasien').select2('close');
                                          });
   });


   $('#form-add-pasien').on('submit', function (e) {
        e.preventDefault();
       
       var o = {};
       var a = $(this).serializeArray();
       $.each(a, function () {
           if (o[this.name]) {
               if (!o[this.name].push) {
                   o[this.name] = [o[this.name]];
               }
               o[this.name].push(this.value || '');
           } else {
               o[this.name] = this.value || '';
           }
       });

       console.log(o);
       
   })
});